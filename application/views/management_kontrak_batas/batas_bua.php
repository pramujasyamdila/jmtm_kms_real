                                                                <!-- bua -->

                                                                <style>
                                                                    table,
                                                                    td,
                                                                    th {
                                                                        height: 10px !important;
                                                                        border: 1px solid black;
                                                                        vertical-align: center;

                                                                    }

                                                                    table {
                                                                        border-collapse: collapse;
                                                                        width: 100%;
                                                                    }

                                                                    td {
                                                                        height: 10px !important;
                                                                        vertical-align: center;
                                                                    }
                                                                </style>
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_bua');
                                                                $this->db->where('tbl_bua.id_kontrak', $row_kontrak['id_kontrak']);
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
                                                                    <tr class="text-white" style="font-family: RNSSanz-Black;font-size:16px;font-weight:300;background-color: #1c4e80;">
                                                                        <td style="font-family: RNSSanz-Medium;font-size:13px;" class="tg-0lax">
                                                                            1.3
                                                                        </td>
                                                                        <td class="tg-0lax text-white"> BUA</td>
                                                                        <?php if ($adendum_result) { ?>
                                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                            <?php
                                                                            if ($value['no_adendum'] == 1) {
                                                                                $type_add_nilai = 1;
                                                                                $nilai = 'nilai_bua_add_I';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_1';
                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                $type_add_nilai = 2;
                                                                                $nilai = 'nilai_bua_add_II';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_2';
                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                $type_add_nilai = 3;
                                                                                $nilai = 'nilai_bua_add_III';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_3';
                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                $type_add_nilai = 4;
                                                                                $nilai = 'nilai_bua_add_IV';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_4';
                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                $type_add_nilai = 5;
                                                                                $nilai = 'nilai_bua_add_V';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_5';
                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                $type_add_nilai = 6;
                                                                                $nilai = 'nilai_bua_add_VI';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_6';
                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                $type_add_nilai = 7;
                                                                                $nilai = 'nilai_bua_add_VII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_7';
                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                $type_add_nilai = 8;
                                                                                $nilai = 'nilai_bua_add_VIII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_8';
                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                $type_add_nilai = 9;
                                                                                $nilai = 'nilai_bua_add_IX';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_9';
                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                $type_add_nilai = 10;
                                                                                $nilai = 'nilai_bua_add_X';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_10';
                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                $type_add_nilai = 11;
                                                                                $nilai = 'nilai_bua_add_XI';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_11';
                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                $type_add_nilai = 12;
                                                                                $nilai = 'nilai_bua_add_XII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_12';
                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                $type_add_nilai = 13;
                                                                                $nilai = 'nilai_bua_add_XIII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_13';
                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                $type_add_nilai = 14;
                                                                                $nilai = 'nilai_bua_add_XIV';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_14';
                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                $type_add_nilai = 15;
                                                                                $nilai = 'nilai_bua_add_XV';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_15';
                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                $type_add_nilai = 16;
                                                                                $nilai = 'nilai_bua_add_XVI';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_16';
                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                $type_add_nilai = 17;
                                                                                $nilai = 'nilai_bua_add_XVII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_17';
                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                $type_add_nilai = 18;
                                                                                $nilai = 'nilai_bua_add_XVIII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_18';
                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                $type_add_nilai = 19;
                                                                                $nilai = 'nilai_bua_add_XIX';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_19';
                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                $type_add_nilai = 20;
                                                                                $nilai = 'nilai_bua_add_XX';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_20';
                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                $type_add_nilai = 21;
                                                                                $nilai = 'nilai_bua_add_XXI';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_21';
                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                $type_add_nilai = 22;
                                                                                $nilai = 'nilai_bua_add_XXII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_22';
                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                $type_add_nilai = 23;
                                                                                $nilai = 'nilai_bua_add_XXIII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_23';
                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                $type_add_nilai = 24;
                                                                                $nilai = 'nilai_bua_add_XXIV';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_24';
                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                $type_add_nilai = 25;
                                                                                $nilai = 'nilai_bua_add_XXV';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_25';
                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                $type_add_nilai = 26;
                                                                                $nilai = 'nilai_bua_add_XXVI';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_26';
                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                $type_add_nilai = 27;
                                                                                $nilai = 'nilai_bua_add_XXVII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_27';
                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                $type_add_nilai = 28;
                                                                                $nilai = 'nilai_bua_add_XXVIII';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_28';
                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                $type_add_nilai = 29;
                                                                                $nilai = 'nilai_bua_add_XXIX';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_29';
                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                $type_add_nilai = 30;
                                                                                $nilai = 'nilai_bua_add_XXX';
                                                                                $update_reusable = 'update_nilai_level_2_bua_add_30';
                                                                            } else {
                                                                                $type_add_nilai = null;
                                                                                $nilai = 'nilai_bua';
                                                                                $update_reusable = 'update_nilai_level_2_bua';
                                                                            }
                                                                            ?>
                                                                            <td class="tg-0lax text-white" style="font-family: RNSSanz-Bold;font-size:13px;" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_bua[$nilai], 2, ',', '.') ?>
                                                                            </td>
                                                                            <td class="tg-0lax">
                                                                                <div class="btn-group" style="padding: -20px !important;">
                                                                                    <button type="button" style="height: 25px;" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true" style="font-size: 10px;"></i></button>
                                                                                    <button type="button" style="height: 25px;" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                        <span style="font-size: 10px;" class="sr-only">Toggle Dropdown</span>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" style="margin-top: -10px;" role="menu">
                                                                                        <?php if ($value_bua[$nilai] == null || $value_bua[$nilai] == 0) { ?>
                                                                                            <?php if ($kondisi_detail_bua) { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($kondisi_detail_bua) { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php    } ?>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        <?php   } ?>
                                                                        <?php } else { ?>
                                                                        <?php
                                                                        $nilai = 'nilai_bua';
                                                                        $update_reusable = 'update_nilai_level_2_bua';
                                                                        $type_add_nilai = null;
                                                                        ?>
                                                                        <td class="tg-0lax text-white" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_bua[$nilai], 2, ',', '.') ?>
                                                                        </td>
                                                                        <td class="tg-0lax">
                                                                            <div class="btn-group">
                                                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                </button>
                                                                                <div class="dropdown-menu" role="menu">
                                                                                    <?php if ($value_bua[$nilai] == null || $value_bua[$nilai] == 0) { ?>
                                                                                        <?php if ($kondisi_detail_bua) { ?>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                        <?php    } else { ?>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                        <?php   }  ?>
                                                                                    <?php } else { ?>
                                                                                        <?php if ($kondisi_detail_bua) { ?>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                        <?php    } else { ?>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                            <a onclick="modal_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua_excel',<?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                        <?php   }  ?>
                                                                                    <?php    } ?>
                                                                                </div>
                                                                            </div>
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
                                                                                                <label for="">Nilai</label>
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                            </span>
                                                                                                            <input type="text" class="form-control" name="nilai_bua" id="nilai_bua" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_level_2_bua">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_2_bua" class="btn btn-success button_simpan" onclick="Simpan_level_2_bua(<?= $value_bua['id_bua'] ?>,'update_nilai_level_2_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                        <a href="javascript:;" id="button_tambah_level_2_bua" class="btn btn-success button_simpan" onclick="Simpan_level_2_bua(<?= $value_bua['id_bua'] ?>,'tambah_level_2_bua',<?= $type_add_nilai ?>)">Update</a>
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
                                                                    <tr style="font-family: RNSSanz-ExtraBold;font-size:15px;">
                                                                        <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                            <?= $value_detail_bua['no_urut'] ?> </td>
                                                                        <td class="tg-0lax" style="white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;" title="<?= $value_detail_bua['nama_uraian'] ?>"> <?= $value_detail_bua['nama_uraian'] ?></td>
                                                                        <?php if ($adendum_result) { ?>
                                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                <?php
                                                                                    if ($value['no_adendum'] == 1) {
                                                                                        $type_add_nilai = 1;
                                                                                        $nilai = 'nilai_detail_bua_add_I';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_1';
                                                                                    } else if ($value['no_adendum'] == 2) {
                                                                                        $type_add_nilai = 2;
                                                                                        $nilai = 'nilai_detail_bua_add_II';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_2';
                                                                                    } else if ($value['no_adendum'] == 3) {
                                                                                        $type_add_nilai = 3;
                                                                                        $nilai = 'nilai_detail_bua_add_III';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_3';
                                                                                    } else if ($value['no_adendum'] == 4) {
                                                                                        $type_add_nilai = 4;
                                                                                        $nilai = 'nilai_detail_bua_add_IV';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_4';
                                                                                    } else if ($value['no_adendum'] == 5) {
                                                                                        $type_add_nilai = 5;
                                                                                        $nilai = 'nilai_detail_bua_add_V';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_5';
                                                                                    } else if ($value['no_adendum'] == 6) {
                                                                                        $type_add_nilai = 6;
                                                                                        $nilai = 'nilai_detail_bua_add_VI';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_6';
                                                                                    } else if ($value['no_adendum'] == 7) {
                                                                                        $type_add_nilai = 7;
                                                                                        $nilai = 'nilai_detail_bua_add_VII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_7';
                                                                                    } else if ($value['no_adendum'] == 8) {
                                                                                        $type_add_nilai = 8;
                                                                                        $nilai = 'nilai_detail_bua_add_VIII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_8';
                                                                                    } else if ($value['no_adendum'] == 9) {
                                                                                        $type_add_nilai = 9;
                                                                                        $nilai = 'nilai_detail_bua_add_IX';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_9';
                                                                                    } else if ($value['no_adendum'] == 10) {
                                                                                        $type_add_nilai = 10;
                                                                                        $nilai = 'nilai_detail_bua_add_X';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_10';
                                                                                    } else if ($value['no_adendum'] == 11) {
                                                                                        $type_add_nilai = 11;
                                                                                        $nilai = 'nilai_detail_bua_add_XI';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_11';
                                                                                    } else if ($value['no_adendum'] == 12) {
                                                                                        $type_add_nilai = 12;
                                                                                        $nilai = 'nilai_detail_bua_add_XII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_12';
                                                                                    } else if ($value['no_adendum'] == 13) {
                                                                                        $type_add_nilai = 13;
                                                                                        $nilai = 'nilai_detail_bua_add_XIII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_13';
                                                                                    } else if ($value['no_adendum'] == 14) {
                                                                                        $type_add_nilai = 14;
                                                                                        $nilai = 'nilai_detail_bua_add_XIV';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_14';
                                                                                    } else if ($value['no_adendum'] == 15) {
                                                                                        $type_add_nilai = 15;
                                                                                        $nilai = 'nilai_detail_bua_add_XV';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_15';
                                                                                    } else if ($value['no_adendum'] == 16) {
                                                                                        $type_add_nilai = 16;
                                                                                        $nilai = 'nilai_detail_bua_add_XVI';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_16';
                                                                                    } else if ($value['no_adendum'] == 17) {
                                                                                        $type_add_nilai = 17;
                                                                                        $nilai = 'nilai_detail_bua_add_XVII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_17';
                                                                                    } else if ($value['no_adendum'] == 18) {
                                                                                        $type_add_nilai = 18;
                                                                                        $nilai = 'nilai_detail_bua_add_XVIII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_18';
                                                                                    } else if ($value['no_adendum'] == 19) {
                                                                                        $type_add_nilai = 19;
                                                                                        $nilai = 'nilai_detail_bua_add_XIX';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_19';
                                                                                    } else if ($value['no_adendum'] == 20) {
                                                                                        $type_add_nilai = 20;
                                                                                        $nilai = 'nilai_detail_bua_add_XX';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_20';
                                                                                    } else if ($value['no_adendum'] == 21) {
                                                                                        $type_add_nilai = 21;
                                                                                        $nilai = 'nilai_detail_bua_add_XXI';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_21';
                                                                                    } else if ($value['no_adendum'] == 22) {
                                                                                        $type_add_nilai = 22;
                                                                                        $nilai = 'nilai_detail_bua_add_XXII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_22';
                                                                                    } else if ($value['no_adendum'] == 23) {
                                                                                        $type_add_nilai = 23;
                                                                                        $nilai = 'nilai_detail_bua_add_XXIII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_23';
                                                                                    } else if ($value['no_adendum'] == 24) {
                                                                                        $type_add_nilai = 24;
                                                                                        $nilai = 'nilai_detail_bua_add_XXIV';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_24';
                                                                                    } else if ($value['no_adendum'] == 25) {
                                                                                        $type_add_nilai = 25;
                                                                                        $nilai = 'nilai_detail_bua_add_XXV';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_25';
                                                                                    } else if ($value['no_adendum'] == 26) {
                                                                                        $type_add_nilai = 26;
                                                                                        $nilai = 'nilai_detail_bua_add_XXVI';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_26';
                                                                                    } else if ($value['no_adendum'] == 27) {
                                                                                        $type_add_nilai = 27;
                                                                                        $nilai = 'nilai_detail_bua_add_XXVII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_27';
                                                                                    } else if ($value['no_adendum'] == 28) {
                                                                                        $type_add_nilai = 28;
                                                                                        $nilai = 'nilai_detail_bua_add_XXVIII';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_28';
                                                                                    } else if ($value['no_adendum'] == 29) {
                                                                                        $type_add_nilai = 29;
                                                                                        $nilai = 'nilai_detail_bua_add_XXIX';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_29';
                                                                                    } else if ($value['no_adendum'] == 30) {
                                                                                        $type_add_nilai = 30;
                                                                                        $nilai = 'nilai_detail_bua_add_XXX';
                                                                                        $update_reusable = 'update_nilai_level_3_bua_add_30';
                                                                                    } else {
                                                                                        $type_add_nilai = null;
                                                                                        $nilai = 'nilai_detail_bua';
                                                                                        $update_reusable = 'update_nilai_level_3_bua';
                                                                                    }
                                                                                ?>
                                                                                <td class="tg-0lax" style="font-family: RNSSanz-ExtraBold;font-size:15px;"> <?= number_format($value_detail_bua[$nilai], 2, ',', '.') ?>
                                                                                </td>
                                                                                <td class="tg-0lax">
                                                                                    <div class="btn-group">
                                                                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                        </button>
                                                                                        <div class="dropdown-menu" role="menu">
                                                                                            <?php if ($value_detail_bua[$nilai] == null || $value_detail_bua[$nilai] == 0) { ?>
                                                                                                <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <!-- UBAH urutan -->
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file">angga 1</i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i>angga 2</a>
                                                                                                    <!-- UBAH urutan -->
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php   }  ?>
                                                                                            <?php } else { ?>
                                                                                                <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i>angga 3</a>
                                                                                                    <!-- UBAH urutan -->
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"> angga 4</i></a>
                                                                                                    <!-- UBAH urutan -->
                                                                                                    <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php   }  ?>
                                                                                            <?php    } ?>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            <?php   } ?>
                                                                        <?php } else { ?>
                                                                            <?php
                                                                                $nilai = 'nilai_detail_bua';
                                                                                $update_reusable = 'update_nilai_level_3_bua';
                                                                                $type_add_nilai = null;
                                                                            ?>
                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua[$nilai], 2, ',', '.') ?>
                                                                            </td>
                                                                            <td class="tg-0lax">
                                                                                <div class="btn-group">
                                                                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                    </button>
                                                                                    <div class="dropdown-menu" role="menu">
                                                                                        <?php if ($value_detail_bua[$nilai] == null || $value_detail_bua[$nilai] == 0) { ?>
                                                                                            <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                <!-- UBAH urutan -->
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                <!-- UBAH urutan -->
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php } else { ?>
                                                                                            <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                <!-- UBAH urutan -->
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                            <?php    } else { ?>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'hapus_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'edit_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'tambah_level_3_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                <!-- UBAH urutan -->
                                                                                                <a onclick="modal_level_3_bua(<?= $value_detail_bua['id_bua_detail'] ?>,'urutan_level_3_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                            <?php   }  ?>
                                                                                        <?php    } ?>
                                                                                    </div>
                                                                                </div>
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
                                                                                            <label for="">Nilai</label>
                                                                                            <div class="row">
                                                                                                <div class="col-6">
                                                                                                    <div class="input-group-prepend">
                                                                                                        <span class="input-group-text">
                                                                                                            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                        </span>
                                                                                                        <input type="text" class="form-control" name="nilai_detail_bua" id="nilai_detail_bua" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_detail_bua_level_3_bua">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <a href="javascript:;" style="display: none;" id="button_update_nilai_level_3_bua" class="btn btn-success button_simpan" onclick="Simpan_level_3_bua('update_nilai_level_3_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                    <a href="javascript:;" id="button_tambah_level_3_bua" class="btn btn-success button_simpan" onclick="Simpan_level_3_bua('tambah_level_3_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                    <a href="javascript:;" id="button_edit_level_3_bua" class="btn btn-success button_simpan" onclick="Simpan_level_3_bua('edit_level_3_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                        <?php $id_detail_bua_1 = $value_detail_bua_1['id_detail_bua_1'];  ?>
                                                                        <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_detail_bua_2');
                                                                                $this->db->where('tbl_detail_bua_2.id_detail_bua_1', $id_detail_bua_1);
                                                                                $kondisi_bua_detail_1 = $this->db->get()->result_array() ?>
                                                                        <tr style="font-family: RNSSanz-ExtraBold;font-size:15px;">
                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                <?= $value_detail_bua_1['no_urut_1_bua'] ?>
                                                                            </td>
                                                                            <td class="tg-0lax" style="white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;" title="<?= $value_detail_bua_1['nama_uraian_1_bua'] ?>"> <?= $value_detail_bua_1['nama_uraian_1_bua'] ?></td>
                                                                            <?php if ($adendum_result) { ?>
                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                    <?php
                                                                                        if ($value['no_adendum'] == 1) {
                                                                                            $type_add_nilai = 1;
                                                                                            $nilai = 'nilai_bua_detail_1_add_I';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_1';
                                                                                        } else if ($value['no_adendum'] == 2) {
                                                                                            $type_add_nilai = 2;
                                                                                            $nilai = 'nilai_bua_detail_1_add_II';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_2';
                                                                                        } else if ($value['no_adendum'] == 3) {
                                                                                            $type_add_nilai = 3;
                                                                                            $nilai = 'nilai_bua_detail_1_add_III';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_3';
                                                                                        } else if ($value['no_adendum'] == 4) {
                                                                                            $type_add_nilai = 4;
                                                                                            $nilai = 'nilai_bua_detail_1_add_IV';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_4';
                                                                                        } else if ($value['no_adendum'] == 5) {
                                                                                            $type_add_nilai = 5;
                                                                                            $nilai = 'nilai_bua_detail_1_add_V';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_5';
                                                                                        } else if ($value['no_adendum'] == 6) {
                                                                                            $type_add_nilai = 6;
                                                                                            $nilai = 'nilai_bua_detail_1_add_VI';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_6';
                                                                                        } else if ($value['no_adendum'] == 7) {
                                                                                            $type_add_nilai = 7;
                                                                                            $nilai = 'nilai_bua_detail_1_add_VII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_7';
                                                                                        } else if ($value['no_adendum'] == 8) {
                                                                                            $type_add_nilai = 8;
                                                                                            $nilai = 'nilai_bua_detail_1_add_VIII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_8';
                                                                                        } else if ($value['no_adendum'] == 9) {
                                                                                            $type_add_nilai = 9;
                                                                                            $nilai = 'nilai_bua_detail_1_add_IX';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_9';
                                                                                        } else if ($value['no_adendum'] == 10) {
                                                                                            $type_add_nilai = 10;
                                                                                            $nilai = 'nilai_bua_detail_1_add_X';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_10';
                                                                                        } else if ($value['no_adendum'] == 11) {
                                                                                            $type_add_nilai = 11;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XI';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_11';
                                                                                        } else if ($value['no_adendum'] == 12) {
                                                                                            $type_add_nilai = 12;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_12';
                                                                                        } else if ($value['no_adendum'] == 13) {
                                                                                            $type_add_nilai = 13;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XIII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_13';
                                                                                        } else if ($value['no_adendum'] == 14) {
                                                                                            $type_add_nilai = 14;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XIV';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_14';
                                                                                        } else if ($value['no_adendum'] == 15) {
                                                                                            $type_add_nilai = 15;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XV';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_15';
                                                                                        } else if ($value['no_adendum'] == 16) {
                                                                                            $type_add_nilai = 16;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XVI';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_16';
                                                                                        } else if ($value['no_adendum'] == 17) {
                                                                                            $type_add_nilai = 17;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XVII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_17';
                                                                                        } else if ($value['no_adendum'] == 18) {
                                                                                            $type_add_nilai = 18;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XVIII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_18';
                                                                                        } else if ($value['no_adendum'] == 19) {
                                                                                            $type_add_nilai = 19;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XIX';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_19';
                                                                                        } else if ($value['no_adendum'] == 20) {
                                                                                            $type_add_nilai = 20;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XX';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_20';
                                                                                        } else if ($value['no_adendum'] == 21) {
                                                                                            $type_add_nilai = 21;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXI';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_21';
                                                                                        } else if ($value['no_adendum'] == 22) {
                                                                                            $type_add_nilai = 22;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_22';
                                                                                        } else if ($value['no_adendum'] == 23) {
                                                                                            $type_add_nilai = 23;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXIII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_23';
                                                                                        } else if ($value['no_adendum'] == 24) {
                                                                                            $type_add_nilai = 24;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXIV';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_24';
                                                                                        } else if ($value['no_adendum'] == 25) {
                                                                                            $type_add_nilai = 25;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXV';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_25';
                                                                                        } else if ($value['no_adendum'] == 26) {
                                                                                            $type_add_nilai = 26;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXVI';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_26';
                                                                                        } else if ($value['no_adendum'] == 27) {
                                                                                            $type_add_nilai = 27;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXVII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_27';
                                                                                        } else if ($value['no_adendum'] == 28) {
                                                                                            $type_add_nilai = 28;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXVIII';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_28';
                                                                                        } else if ($value['no_adendum'] == 29) {
                                                                                            $type_add_nilai = 29;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXIX';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_29';
                                                                                        } else if ($value['no_adendum'] == 30) {
                                                                                            $type_add_nilai = 30;
                                                                                            $nilai = 'nilai_bua_detail_1_add_XXX';
                                                                                            $update_reusable = 'update_nilai_level_4_bua_add_30';
                                                                                        } else {
                                                                                            $type_add_nilai = null;
                                                                                            $nilai = 'nilai_bua_detail_1';
                                                                                            $update_reusable = 'update_nilai_level_4_bua';
                                                                                        }
                                                                                    ?>
                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_1[$nilai], 2, ',', '.') ?>
                                                                                    </td>
                                                                                    <td class="tg-0lax">
                                                                                        <div class="btn-group">
                                                                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                <?php if ($value_detail_bua_1[$nilai] == null || $value_detail_bua_1[$nilai] == 0) { ?>
                                                                                                    <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file">ss</i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php   }  ?>
                                                                                                <?php } else { ?>
                                                                                                    <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php   }  ?>
                                                                                                <?php    } ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                <?php   } ?>
                                                                            <?php } else { ?>
                                                                                <?php
                                                                                    $nilai = 'nilai_bua_detail_1';
                                                                                    $update_reusable = 'update_nilai_level_4_bua';
                                                                                    $type_add_nilai = null;
                                                                                ?>
                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_1[$nilai], 2, ',', '.') ?>
                                                                                </td>
                                                                                <td class="tg-0lax">
                                                                                    <div class="btn-group">
                                                                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                        </button>
                                                                                        <div class="dropdown-menu" role="menu">
                                                                                            <?php if ($value_detail_bua_1[$nilai] == null || $value_detail_bua_1[$nilai] == 0) { ?>
                                                                                                <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php   }  ?>
                                                                                            <?php } else { ?>
                                                                                                <?php if ($kondisi_bua_detail_1) { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php    } else { ?>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'hapus_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'edit_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'tambah_level_4_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                    <a onclick="modal_level_4_bua(<?= $value_detail_bua_1['id_detail_bua_1'] ?>,'urutan_level_4_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                <?php   }  ?>
                                                                                            <?php    } ?>
                                                                                        </div>
                                                                                    </div>
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
                                                                                                <label for="">Nilai</label>
                                                                                                <div class="row">
                                                                                                    <div class="col-6">
                                                                                                        <div class="input-group-prepend">
                                                                                                            <span class="input-group-text">
                                                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                            </span>
                                                                                                            <input type="text" class="form-control" name="nilai_bua_detail_1" id="nilai_bua_detail_1" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-6">
                                                                                                        <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_1_level_4_bua">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_4_bua" class="btn btn-success button_simpan" onclick="Simpan_level_4_bua('update_nilai_level_4_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                        <a href="javascript:;" id="button_tambah_level_4_bua" class="btn btn-success button_simpan" onclick="Simpan_level_4_bua('tambah_level_4_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                        <a href="javascript:;" id="button_edit_level_4_bua" class="btn btn-success button_simpan" onclick="Simpan_level_4_bua('edit_level_4_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                            <tr class="" style="font-family: RNSSanz-Bold;font-size:13px;">
                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                    <?= $value_detail_bua_2['no_urut_2_bua'] ?> </td>
                                                                                </td>
                                                                                <td class="tg-0lax" style="padding-left:40px; white-space: nowrap; width: 300px;overflow: hidden;text-overflow: ellipsis;" title="<?= $value_detail_bua_2['nama_uraian_2_bua'] ?>"><?= $value_detail_bua_2['nama_uraian_2_bua'] ?></td>
                                                                                <?php if ($adendum_result) { ?>
                                                                                    <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                        <?php
                                                                                            if ($value['no_adendum'] == 1) {
                                                                                                $type_add_nilai = 1;
                                                                                                $nilai = 'nilai_bua_detail_2_add_I';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_1';
                                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                                $type_add_nilai = 2;
                                                                                                $nilai = 'nilai_bua_detail_2_add_II';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_2';
                                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                                $type_add_nilai = 3;
                                                                                                $nilai = 'nilai_bua_detail_2_add_III';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_3';
                                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                                $type_add_nilai = 4;
                                                                                                $nilai = 'nilai_bua_detail_2_add_IV';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_4';
                                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                                $type_add_nilai = 5;
                                                                                                $nilai = 'nilai_bua_detail_2_add_V';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_5';
                                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                                $type_add_nilai = 6;
                                                                                                $nilai = 'nilai_bua_detail_2_add_VI';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_6';
                                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                                $type_add_nilai = 7;
                                                                                                $nilai = 'nilai_bua_detail_2_add_VII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_7';
                                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                                $type_add_nilai = 8;
                                                                                                $nilai = 'nilai_bua_detail_2_add_VIII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_8';
                                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                                $type_add_nilai = 9;
                                                                                                $nilai = 'nilai_bua_detail_2_add_IX';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_9';
                                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                                $type_add_nilai = 10;
                                                                                                $nilai = 'nilai_bua_detail_2_add_X';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_10';
                                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                                $type_add_nilai = 11;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XI';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_11';
                                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                                $type_add_nilai = 12;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_12';
                                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                                $type_add_nilai = 13;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XIII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_13';
                                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                                $type_add_nilai = 14;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XIV';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_14';
                                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                                $type_add_nilai = 15;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XV';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_15';
                                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                                $type_add_nilai = 16;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XVI';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_16';
                                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                                $type_add_nilai = 17;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XVII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_17';
                                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                                $type_add_nilai = 18;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XVIII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_18';
                                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                                $type_add_nilai = 19;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XIX';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_19';
                                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                                $type_add_nilai = 20;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XX';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_20';
                                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                                $type_add_nilai = 21;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXI';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_21';
                                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                                $type_add_nilai = 22;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_22';
                                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                                $type_add_nilai = 23;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXIII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_23';
                                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                                $type_add_nilai = 24;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXIV';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_24';
                                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                                $type_add_nilai = 25;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXV';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_25';
                                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                                $type_add_nilai = 26;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXVI';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_26';
                                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                                $type_add_nilai = 27;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXVII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_27';
                                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                                $type_add_nilai = 28;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXVIII';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_28';
                                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                                $type_add_nilai = 29;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXIX';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_29';
                                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                                $type_add_nilai = 30;
                                                                                                $nilai = 'nilai_bua_detail_2_add_XXX';
                                                                                                $update_reusable = 'update_nilai_level_5_bua_add_30';
                                                                                            } else {
                                                                                                $type_add_nilai = null;
                                                                                                $nilai = 'nilai_bua_detail_1';
                                                                                                $update_reusable = 'update_nilai_level_5_bua';
                                                                                            }
                                                                                        ?>
                                                                                        <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_2[$nilai], 2, ',', '.') ?>
                                                                                        </td>
                                                                                        <td class="tg-0lax">
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" role="menu">
                                                                                                    <?php if ($value_detail_bua_2[$nilai] == null || $value_detail_bua_2[$nilai] == 0) { ?>
                                                                                                        <?php if ($kondisi_bua_detail_2) { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php   }  ?>
                                                                                                    <?php } else { ?>
                                                                                                        <?php if ($kondisi_bua_detail_2) { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>

                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php   }  ?>
                                                                                                    <?php    } ?>
                                                                                                </div>
                                                                                            </div>
                                                                                        </td>
                                                                                    <?php   } ?>
                                                                                <?php } else { ?>
                                                                                    <?php
                                                                                        $nilai = 'nilai_bua_detail_2';
                                                                                        $update_reusable = 'update_nilai_level_5_bua';
                                                                                        $type_add_nilai = null;
                                                                                    ?>
                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_2[$nilai], 2, ',', '.') ?>
                                                                                    </td>
                                                                                    <td class="tg-0lax">
                                                                                        <div class="btn-group">
                                                                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                            </button>
                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                <?php if ($value_detail_bua_2[$nilai] == null || $value_detail_bua_2[$nilai] == 0) { ?>
                                                                                                    <?php if ($kondisi_bua_detail_2) { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php   }  ?>
                                                                                                <?php } else { ?>
                                                                                                    <?php if ($kondisi_bua_detail_2) { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php    } else { ?>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'hapus_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'edit_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'tambah_level_5_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                        <a onclick="modal_level_5_bua(<?= $value_detail_bua_2['id_detail_bua_2'] ?>,'urutan_level_5_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                    <?php   }  ?>
                                                                                                <?php    } ?>
                                                                                            </div>
                                                                                        </div>
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
                                                                                                    <label for="">Nilai</label>
                                                                                                    <div class="row">
                                                                                                        <div class="col-6">
                                                                                                            <div class="input-group-prepend">
                                                                                                                <span class="input-group-text">
                                                                                                                    <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                </span>
                                                                                                                <input type="text" class="form-control" name="nilai_bua_detail_2" id="nilai_bua_detail_2" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="col-6">
                                                                                                            <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_2_level_5_bua">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                        <div class="modal-footer">
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <a href="javascript:;" style="display: none;" id="button_update_nilai_level_5_bua" class="btn btn-success button_simpan" onclick="Simpan_level_5_bua('update_nilai_level_5_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                            <a href="javascript:;" id="button_tambah_level_5_bua" class="btn btn-success button_simpan" onclick="Simpan_level_5_bua('tambah_level_5_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                            <a href="javascript:;" id="button_edit_level_5_bua" class="btn btn-success button_simpan" onclick="Simpan_level_5_bua('edit_level_5_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                <tr class="" style="font-family: RNSSanz-Bold;font-size:13px;">
                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                        <?= $value_detail_bua_3['no_urut_3_bua'] ?> </td>
                                                                                    <td class="tg-0lax" style="padding-left:70px;"><?= $value_detail_bua_3['nama_uraian_3_bua'] ?></td>

                                                                                    <?php if ($adendum_result) { ?>
                                                                                        <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                            <?php
                                                                                                if ($value['no_adendum'] == 1) {
                                                                                                    $type_add_nilai = 1;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_I';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_1';
                                                                                                } else if ($value['no_adendum'] == 2) {
                                                                                                    $type_add_nilai = 2;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_II';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_2';
                                                                                                } else if ($value['no_adendum'] == 3) {
                                                                                                    $type_add_nilai = 3;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_III';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_3';
                                                                                                } else if ($value['no_adendum'] == 4) {
                                                                                                    $type_add_nilai = 4;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_IV';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_4';
                                                                                                } else if ($value['no_adendum'] == 5) {
                                                                                                    $type_add_nilai = 5;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_V';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_5';
                                                                                                } else if ($value['no_adendum'] == 6) {
                                                                                                    $type_add_nilai = 6;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_VI';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_6';
                                                                                                } else if ($value['no_adendum'] == 7) {
                                                                                                    $type_add_nilai = 7;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_VII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_7';
                                                                                                } else if ($value['no_adendum'] == 8) {
                                                                                                    $type_add_nilai = 8;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_VIII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_8';
                                                                                                } else if ($value['no_adendum'] == 9) {
                                                                                                    $type_add_nilai = 9;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_IX';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_9';
                                                                                                } else if ($value['no_adendum'] == 10) {
                                                                                                    $type_add_nilai = 10;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_X';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_10';
                                                                                                } else if ($value['no_adendum'] == 11) {
                                                                                                    $type_add_nilai = 11;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XI';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_11';
                                                                                                } else if ($value['no_adendum'] == 12) {
                                                                                                    $type_add_nilai = 12;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_12';
                                                                                                } else if ($value['no_adendum'] == 13) {
                                                                                                    $type_add_nilai = 13;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XIII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_13';
                                                                                                } else if ($value['no_adendum'] == 14) {
                                                                                                    $type_add_nilai = 14;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XIV';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_14';
                                                                                                } else if ($value['no_adendum'] == 15) {
                                                                                                    $type_add_nilai = 15;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XV';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_15';
                                                                                                } else if ($value['no_adendum'] == 16) {
                                                                                                    $type_add_nilai = 16;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XVI';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_16';
                                                                                                } else if ($value['no_adendum'] == 17) {
                                                                                                    $type_add_nilai = 17;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XVII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_17';
                                                                                                } else if ($value['no_adendum'] == 18) {
                                                                                                    $type_add_nilai = 18;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XVIII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_18';
                                                                                                } else if ($value['no_adendum'] == 19) {
                                                                                                    $type_add_nilai = 19;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XIX';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_19';
                                                                                                } else if ($value['no_adendum'] == 20) {
                                                                                                    $type_add_nilai = 20;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XX';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_20';
                                                                                                } else if ($value['no_adendum'] == 21) {
                                                                                                    $type_add_nilai = 21;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXI';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_21';
                                                                                                } else if ($value['no_adendum'] == 22) {
                                                                                                    $type_add_nilai = 22;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_22';
                                                                                                } else if ($value['no_adendum'] == 23) {
                                                                                                    $type_add_nilai = 23;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXIII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_23';
                                                                                                } else if ($value['no_adendum'] == 24) {
                                                                                                    $type_add_nilai = 24;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXIV';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_24';
                                                                                                } else if ($value['no_adendum'] == 25) {
                                                                                                    $type_add_nilai = 25;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXV';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_25';
                                                                                                } else if ($value['no_adendum'] == 26) {
                                                                                                    $type_add_nilai = 26;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXVI';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_26';
                                                                                                } else if ($value['no_adendum'] == 27) {
                                                                                                    $type_add_nilai = 27;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXVII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_27';
                                                                                                } else if ($value['no_adendum'] == 28) {
                                                                                                    $type_add_nilai = 28;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXVIII';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_28';
                                                                                                } else if ($value['no_adendum'] == 29) {
                                                                                                    $type_add_nilai = 29;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXIX';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_29';
                                                                                                } else if ($value['no_adendum'] == 30) {
                                                                                                    $type_add_nilai = 30;
                                                                                                    $nilai = 'nilai_bua_detail_3_add_XXX';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua_add_30';
                                                                                                } else {
                                                                                                    $type_add_nilai = null;
                                                                                                    $nilai = 'nilai_bua_detail_1';
                                                                                                    $update_reusable = 'update_nilai_level_6_bua';
                                                                                                }
                                                                                            ?>
                                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_3[$nilai], 2, ',', '.') ?>
                                                                                            </td>
                                                                                            <td class="tg-0lax">
                                                                                                <div class="btn-group">
                                                                                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                        <?php if ($value_detail_bua_3[$nilai] == null || $value_detail_bua_3[$nilai] == 0) { ?>
                                                                                                            <?php if ($kondisi_bua_detail_4) { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>

                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>

                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php   }  ?>
                                                                                                        <?php } else { ?>
                                                                                                            <?php if ($kondisi_bua_detail_4) { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php   }  ?>
                                                                                                        <?php    } ?>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </td>
                                                                                        <?php   } ?>
                                                                                    <?php } else { ?>
                                                                                        <?php
                                                                                            $nilai = 'nilai_bua_detail_3';
                                                                                            $update_reusable = 'update_nilai_level_6_bua';
                                                                                            $type_add_nilai = null;
                                                                                        ?>
                                                                                        <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_3[$nilai], 2, ',', '.') ?>
                                                                                        </td>
                                                                                        <td class="tg-0lax">
                                                                                            <div class="btn-group">
                                                                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                                </button>
                                                                                                <div class="dropdown-menu" role="menu">
                                                                                                    <?php if ($value_detail_bua_3[$nilai] == null || $value_detail_bua_3[$nilai] == 0) { ?>
                                                                                                        <?php if ($kondisi_bua_detail_4) { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php   }  ?>
                                                                                                    <?php } else { ?>
                                                                                                        <?php if ($kondisi_bua_detail_4) { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php    } else { ?>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'hapus_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'edit_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'tambah_level_6_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                            <a onclick="modal_level_6_bua(<?= $value_detail_bua_3['id_detail_bua_3'] ?>,'urutan_level_6_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                        <?php   }  ?>
                                                                                                    <?php    } ?>
                                                                                                </div>
                                                                                            </div>
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
                                                                                                        <label for="">Nilai</label>
                                                                                                        <div class="row">
                                                                                                            <div class="col-6">
                                                                                                                <div class="input-group-prepend">
                                                                                                                    <span class="input-group-text">
                                                                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                    </span>
                                                                                                                    <input type="text" class="form-control" name="nilai_bua_detail_3" id="nilai_bua_detail_3" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-6">
                                                                                                                <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_3_level_6_bua">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </form>
                                                                                            </div>
                                                                                            <div class="modal-footer">
                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                <a href="javascript:;" style="display: none;" id="button_update_nilai_level_6_bua" class="btn btn-success button_simpan" onclick="Simpan_level_6_bua('update_nilai_level_6_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                <a href="javascript:;" id="button_tambah_level_6_bua" class="btn btn-success button_simpan" onclick="Simpan_level_6_bua('tambah_level_6_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                <a href="javascript:;" id="button_edit_level_6_bua" class="btn btn-success button_simpan" onclick="Simpan_level_6_bua('edit_level_6_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                    <tr style="font-family: RNSSanz-Bold;font-size:13px;">
                                                                                        <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                            <?= $value_detail_bua_4['no_urut_4_bua'] ?> </td>
                                                                                        <td class="tg-0lax" style="padding-left:100px;"><?= $value_detail_bua_4['nama_uraian_4_bua'] ?></td>
                                                                                        <?php if ($adendum_result) { ?>
                                                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                <?php
                                                                                                    if ($value['no_adendum'] == 1) {
                                                                                                        $type_add_nilai = 1;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_I';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_1';
                                                                                                    } else if ($value['no_adendum'] == 2) {
                                                                                                        $type_add_nilai = 2;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_II';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_2';
                                                                                                    } else if ($value['no_adendum'] == 3) {
                                                                                                        $type_add_nilai = 3;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_III';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_3';
                                                                                                    } else if ($value['no_adendum'] == 4) {
                                                                                                        $type_add_nilai = 4;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_IV';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_4';
                                                                                                    } else if ($value['no_adendum'] == 5) {
                                                                                                        $type_add_nilai = 5;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_V';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_5';
                                                                                                    } else if ($value['no_adendum'] == 6) {
                                                                                                        $type_add_nilai = 6;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_VI';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_6';
                                                                                                    } else if ($value['no_adendum'] == 7) {
                                                                                                        $type_add_nilai = 7;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_VII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_7';
                                                                                                    } else if ($value['no_adendum'] == 8) {
                                                                                                        $type_add_nilai = 8;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_VIII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_8';
                                                                                                    } else if ($value['no_adendum'] == 9) {
                                                                                                        $type_add_nilai = 9;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_IX';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_9';
                                                                                                    } else if ($value['no_adendum'] == 10) {
                                                                                                        $type_add_nilai = 10;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_X';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_10';
                                                                                                    } else if ($value['no_adendum'] == 11) {
                                                                                                        $type_add_nilai = 11;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XI';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_11';
                                                                                                    } else if ($value['no_adendum'] == 12) {
                                                                                                        $type_add_nilai = 12;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_12';
                                                                                                    } else if ($value['no_adendum'] == 13) {
                                                                                                        $type_add_nilai = 13;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XIII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_13';
                                                                                                    } else if ($value['no_adendum'] == 14) {
                                                                                                        $type_add_nilai = 14;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XIV';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_14';
                                                                                                    } else if ($value['no_adendum'] == 15) {
                                                                                                        $type_add_nilai = 15;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XV';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_15';
                                                                                                    } else if ($value['no_adendum'] == 16) {
                                                                                                        $type_add_nilai = 16;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XVI';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_16';
                                                                                                    } else if ($value['no_adendum'] == 17) {
                                                                                                        $type_add_nilai = 17;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XVII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_17';
                                                                                                    } else if ($value['no_adendum'] == 18) {
                                                                                                        $type_add_nilai = 18;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XVIII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_18';
                                                                                                    } else if ($value['no_adendum'] == 19) {
                                                                                                        $type_add_nilai = 19;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XIX';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_19';
                                                                                                    } else if ($value['no_adendum'] == 20) {
                                                                                                        $type_add_nilai = 20;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XX';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_20';
                                                                                                    } else if ($value['no_adendum'] == 21) {
                                                                                                        $type_add_nilai = 21;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXI';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_21';
                                                                                                    } else if ($value['no_adendum'] == 22) {
                                                                                                        $type_add_nilai = 22;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_22';
                                                                                                    } else if ($value['no_adendum'] == 23) {
                                                                                                        $type_add_nilai = 23;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXIII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_23';
                                                                                                    } else if ($value['no_adendum'] == 24) {
                                                                                                        $type_add_nilai = 24;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXIV';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_24';
                                                                                                    } else if ($value['no_adendum'] == 25) {
                                                                                                        $type_add_nilai = 25;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXV';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_25';
                                                                                                    } else if ($value['no_adendum'] == 26) {
                                                                                                        $type_add_nilai = 26;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXVI';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_26';
                                                                                                    } else if ($value['no_adendum'] == 27) {
                                                                                                        $type_add_nilai = 27;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXVII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_27';
                                                                                                    } else if ($value['no_adendum'] == 28) {
                                                                                                        $type_add_nilai = 28;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXVIII';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_28';
                                                                                                    } else if ($value['no_adendum'] == 29) {
                                                                                                        $type_add_nilai = 29;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXIX';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_29';
                                                                                                    } else if ($value['no_adendum'] == 30) {
                                                                                                        $type_add_nilai = 30;
                                                                                                        $nilai = 'nilai_bua_detail_4_add_XXX';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua_add_30';
                                                                                                    } else {
                                                                                                        $type_add_nilai = null;
                                                                                                        $nilai = 'nilai_bua_detail_4';
                                                                                                        $update_reusable = 'update_nilai_level_7_bua';
                                                                                                    }
                                                                                                ?>
                                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_4[$nilai], 2, ',', '.') ?>
                                                                                                </td>
                                                                                                <td class="tg-0lax">

                                                                                                    <div class="btn-group">
                                                                                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                                        </button>
                                                                                                        <div class="dropdown-menu" role="menu">
                                                                                                            <?php if ($value_detail_bua_4[$nilai] == null || $value_detail_bua_4[$nilai] == 0) { ?>
                                                                                                                <?php if ($kondisi_bua_detail_5) { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php   }  ?>
                                                                                                            <?php } else { ?>
                                                                                                                <?php if ($kondisi_bua_detail_5) { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                    <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php   }  ?>
                                                                                                            <?php    } ?>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            <?php   } ?>

                                                                                        <?php } else { ?>
                                                                                            <?php
                                                                                                $nilai = 'nilai_bua_detail_4';
                                                                                                $update_reusable = 'update_nilai_level_7_bua';
                                                                                                $type_add_nilai = null;
                                                                                            ?>
                                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_4[$nilai], 2, ',', '.') ?>
                                                                                            </td>
                                                                                            <td class="tg-0lax">
                                                                                                <div class="btn-group">
                                                                                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                    </button>
                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                        <?php if ($value_detail_bua_4[$nilai] == null || $value_detail_bua_4[$nilai] == 0) { ?>
                                                                                                            <?php if ($kondisi_bua_detail_5) { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php   }  ?>
                                                                                                        <?php } else { ?>
                                                                                                            <?php if ($kondisi_bua_detail_5) { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php    } else { ?>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'hapus_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'edit_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'tambah_level_7_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                <a onclick="modal_level_7_bua(<?= $value_detail_bua_4['id_detail_bua_4'] ?>,'urutan_level_7_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                            <?php   }  ?>
                                                                                                        <?php    } ?>
                                                                                                    </div>
                                                                                                </div>
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
                                                                                                            <label for="">Nilai</label>
                                                                                                            <div class="row">
                                                                                                                <div class="col-6">
                                                                                                                    <div class="input-group-prepend">
                                                                                                                        <span class="input-group-text">
                                                                                                                            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                        </span>
                                                                                                                        <input type="text" class="form-control" name="nilai_bua_detail_4" id="nilai_bua_detail_4" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="col-6">
                                                                                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_4_level_7_bua">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                                <div class="modal-footer">
                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                    <a href="javascript:;" style="display: none;" id="button_update_nilai_level_7_bua" class="btn btn-success button_simpan" onclick="Simpan_level_7_bua('update_nilai_level_7_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                    <a href="javascript:;" id="button_tambah_level_7_bua" class="btn btn-success button_simpan" onclick="Simpan_level_7_bua('tambah_level_7_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                    <a href="javascript:;" id="button_edit_level_7_bua" class="btn btn-success button_simpan" onclick="Simpan_level_7_bua('edit_level_7_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                        <tr style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                                <?= $value_detail_bua_5['no_urut_5_bua'] ?>
                                                                                            </td>
                                                                                            <td class="tg-0lax"> <?= $value_detail_bua_5['nama_uraian_5_bua'] ?></td>
                                                                                            <?php if ($adendum_result) { ?>
                                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                    <?php
                                                                                                        if ($value['no_adendum'] == 1) {
                                                                                                            $type_add_nilai = 1;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_I';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_1';
                                                                                                        } else if ($value['no_adendum'] == 2) {
                                                                                                            $type_add_nilai = 2;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_II';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_2';
                                                                                                        } else if ($value['no_adendum'] == 3) {
                                                                                                            $type_add_nilai = 3;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_III';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_3';
                                                                                                        } else if ($value['no_adendum'] == 4) {
                                                                                                            $type_add_nilai = 4;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_IV';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_4';
                                                                                                        } else if ($value['no_adendum'] == 5) {
                                                                                                            $type_add_nilai = 5;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_V';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_5';
                                                                                                        } else if ($value['no_adendum'] == 6) {
                                                                                                            $type_add_nilai = 6;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_VI';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_6';
                                                                                                        } else if ($value['no_adendum'] == 7) {
                                                                                                            $type_add_nilai = 7;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_VII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_7';
                                                                                                        } else if ($value['no_adendum'] == 8) {
                                                                                                            $type_add_nilai = 8;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_VIII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_8';
                                                                                                        } else if ($value['no_adendum'] == 9) {
                                                                                                            $type_add_nilai = 9;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_IX';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_9';
                                                                                                        } else if ($value['no_adendum'] == 10) {
                                                                                                            $type_add_nilai = 10;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_X';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_10';
                                                                                                        } else if ($value['no_adendum'] == 11) {
                                                                                                            $type_add_nilai = 11;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XI';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_11';
                                                                                                        } else if ($value['no_adendum'] == 12) {
                                                                                                            $type_add_nilai = 12;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_12';
                                                                                                        } else if ($value['no_adendum'] == 13) {
                                                                                                            $type_add_nilai = 13;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XIII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_13';
                                                                                                        } else if ($value['no_adendum'] == 14) {
                                                                                                            $type_add_nilai = 14;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XIV';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_14';
                                                                                                        } else if ($value['no_adendum'] == 15) {
                                                                                                            $type_add_nilai = 15;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XV';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_15';
                                                                                                        } else if ($value['no_adendum'] == 16) {
                                                                                                            $type_add_nilai = 16;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XVI';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_16';
                                                                                                        } else if ($value['no_adendum'] == 17) {
                                                                                                            $type_add_nilai = 17;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XVII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_17';
                                                                                                        } else if ($value['no_adendum'] == 18) {
                                                                                                            $type_add_nilai = 18;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XVIII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_18';
                                                                                                        } else if ($value['no_adendum'] == 19) {
                                                                                                            $type_add_nilai = 19;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XIX';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_19';
                                                                                                        } else if ($value['no_adendum'] == 20) {
                                                                                                            $type_add_nilai = 20;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XX';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_20';
                                                                                                        } else if ($value['no_adendum'] == 21) {
                                                                                                            $type_add_nilai = 21;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXI';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_21';
                                                                                                        } else if ($value['no_adendum'] == 22) {
                                                                                                            $type_add_nilai = 22;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_22';
                                                                                                        } else if ($value['no_adendum'] == 23) {
                                                                                                            $type_add_nilai = 23;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXIII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_23';
                                                                                                        } else if ($value['no_adendum'] == 24) {
                                                                                                            $type_add_nilai = 24;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXIV';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_24';
                                                                                                        } else if ($value['no_adendum'] == 25) {
                                                                                                            $type_add_nilai = 25;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXV';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_25';
                                                                                                        } else if ($value['no_adendum'] == 26) {
                                                                                                            $type_add_nilai = 26;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXVI';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_26';
                                                                                                        } else if ($value['no_adendum'] == 27) {
                                                                                                            $type_add_nilai = 27;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXVII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_27';
                                                                                                        } else if ($value['no_adendum'] == 28) {
                                                                                                            $type_add_nilai = 28;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXVIII';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_28';
                                                                                                        } else if ($value['no_adendum'] == 29) {
                                                                                                            $type_add_nilai = 29;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXIX';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_29';
                                                                                                        } else if ($value['no_adendum'] == 30) {
                                                                                                            $type_add_nilai = 30;
                                                                                                            $nilai = 'nilai_bua_detail_5_add_XXX';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua_add_30';
                                                                                                        } else {
                                                                                                            $type_add_nilai = null;
                                                                                                            $nilai = 'nilai_bua_detail_1';
                                                                                                            $update_reusable = 'update_nilai_level_8_bua';
                                                                                                        }
                                                                                                    ?>
                                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_5[$nilai], 2, ',', '.') ?>
                                                                                                    </td>
                                                                                                    <td class="tg-0lax">
                                                                                                        <div class="btn-group">
                                                                                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                                <?php if ($value_detail_bua_5[$nilai] == null || $value_detail_bua_5[$nilai] == 0) { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_6) { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php   }  ?>
                                                                                                                <?php } else { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_6) { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php   }  ?>
                                                                                                                <?php    } ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                <?php   } ?>

                                                                                            <?php } else { ?>
                                                                                                <!-- kondisi_bua_detail_6 -->
                                                                                                <?php
                                                                                                    $nilai = 'nilai_bua_detail_5';
                                                                                                    $update_reusable = 'update_nilai_level_8_bua';
                                                                                                    $type_add_nilai = null;
                                                                                                ?>
                                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_5[$nilai], 2, ',', '.') ?>
                                                                                                </td>
                                                                                                <td class="tg-0lax">
                                                                                                    <div class="btn-group">
                                                                                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                                        </button>
                                                                                                        <div class="dropdown-menu" role="menu">
                                                                                                            <?php if ($value_detail_bua_5[$nilai] == null || $value_detail_bua_5[$nilai] == 0) { ?>
                                                                                                                <?php if ($kondisi_bua_detail_6) { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php   }  ?>
                                                                                                            <?php } else { ?>
                                                                                                                <?php if ($kondisi_bua_detail_6) { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php    } else { ?>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'hapus_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'edit_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'tambah_level_8_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                    <a onclick="modal_level_8_bua(<?= $value_detail_bua_5['id_detail_bua_5'] ?>,'urutan_level_8_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                <?php   }  ?>
                                                                                                            <?php    } ?>
                                                                                                        </div>
                                                                                                    </div>
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
                                                                                                                <label for="">Nilai</label>
                                                                                                                <div class="row">
                                                                                                                    <div class="col-6">
                                                                                                                        <div class="input-group-prepend">
                                                                                                                            <span class="input-group-text">
                                                                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                            </span>
                                                                                                                            <input type="text" class="form-control" name="nilai_bua_detail_5" id="nilai_bua_detail_5" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div class="col-6">
                                                                                                                        <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_5_level_8_bua">
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </form>
                                                                                                    </div>
                                                                                                    <div class="modal-footer">
                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_8_bua" class="btn btn-success button_simpan" onclick="Simpan_level_8_bua('update_nilai_level_8_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                        <a href="javascript:;" id="button_tambah_level_8_bua" class="btn btn-success button_simpan" onclick="Simpan_level_8_bua('tambah_level_8_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                        <a href="javascript:;" id="button_edit_level_8_bua" class="btn btn-success button_simpan" onclick="Simpan_level_8_bua('edit_level_8_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                            <tr style="font-family: RNSSanz-Medium;font-size:14px;">
                                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                                    <?= $value_detail_bua_6['no_urut_6_bua'] ?> </td>
                                                                                                </td>
                                                                                                <td class="tg-0lax"> <?= $value_detail_bua_6['nama_uraian_6_bua'] ?></td>
                                                                                                <?php if ($adendum_result) { ?>
                                                                                                    <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                        <?php
                                                                                                            if ($value['no_adendum'] == 1) {
                                                                                                                $type_add_nilai = 1;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_I';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_1';
                                                                                                            } else if ($value['no_adendum'] == 2) {
                                                                                                                $type_add_nilai = 2;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_II';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_2';
                                                                                                            } else if ($value['no_adendum'] == 3) {
                                                                                                                $type_add_nilai = 3;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_III';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_3';
                                                                                                            } else if ($value['no_adendum'] == 4) {
                                                                                                                $type_add_nilai = 4;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_IV';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_4';
                                                                                                            } else if ($value['no_adendum'] == 5) {
                                                                                                                $type_add_nilai = 5;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_V';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_5';
                                                                                                            } else if ($value['no_adendum'] == 6) {
                                                                                                                $type_add_nilai = 6;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_VI';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_6';
                                                                                                            } else if ($value['no_adendum'] == 7) {
                                                                                                                $type_add_nilai = 7;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_VII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_7';
                                                                                                            } else if ($value['no_adendum'] == 8) {
                                                                                                                $type_add_nilai = 8;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_VIII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_8';
                                                                                                            } else if ($value['no_adendum'] == 9) {
                                                                                                                $type_add_nilai = 9;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_IX';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_9';
                                                                                                            } else if ($value['no_adendum'] == 10) {
                                                                                                                $type_add_nilai = 10;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_X';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_10';
                                                                                                            } else if ($value['no_adendum'] == 11) {
                                                                                                                $type_add_nilai = 11;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XI';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_11';
                                                                                                            } else if ($value['no_adendum'] == 12) {
                                                                                                                $type_add_nilai = 12;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_12';
                                                                                                            } else if ($value['no_adendum'] == 13) {
                                                                                                                $type_add_nilai = 13;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XIII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_13';
                                                                                                            } else if ($value['no_adendum'] == 14) {
                                                                                                                $type_add_nilai = 14;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XIV';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_14';
                                                                                                            } else if ($value['no_adendum'] == 15) {
                                                                                                                $type_add_nilai = 15;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XV';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_15';
                                                                                                            } else if ($value['no_adendum'] == 16) {
                                                                                                                $type_add_nilai = 16;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XVI';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_16';
                                                                                                            } else if ($value['no_adendum'] == 17) {
                                                                                                                $type_add_nilai = 17;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XVII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_17';
                                                                                                            } else if ($value['no_adendum'] == 18) {
                                                                                                                $type_add_nilai = 18;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XVIII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_18';
                                                                                                            } else if ($value['no_adendum'] == 19) {
                                                                                                                $type_add_nilai = 19;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XIX';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_19';
                                                                                                            } else if ($value['no_adendum'] == 20) {
                                                                                                                $type_add_nilai = 20;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XX';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_20';
                                                                                                            } else if ($value['no_adendum'] == 21) {
                                                                                                                $type_add_nilai = 21;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXI';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_21';
                                                                                                            } else if ($value['no_adendum'] == 22) {
                                                                                                                $type_add_nilai = 22;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_22';
                                                                                                            } else if ($value['no_adendum'] == 23) {
                                                                                                                $type_add_nilai = 23;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXIII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_23';
                                                                                                            } else if ($value['no_adendum'] == 24) {
                                                                                                                $type_add_nilai = 24;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXIV';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_24';
                                                                                                            } else if ($value['no_adendum'] == 25) {
                                                                                                                $type_add_nilai = 25;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXV';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_25';
                                                                                                            } else if ($value['no_adendum'] == 26) {
                                                                                                                $type_add_nilai = 26;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXVI';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_26';
                                                                                                            } else if ($value['no_adendum'] == 27) {
                                                                                                                $type_add_nilai = 27;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXVII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_27';
                                                                                                            } else if ($value['no_adendum'] == 28) {
                                                                                                                $type_add_nilai = 28;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXVIII';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_28';
                                                                                                            } else if ($value['no_adendum'] == 29) {
                                                                                                                $type_add_nilai = 29;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXIX';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_29';
                                                                                                            } else if ($value['no_adendum'] == 30) {
                                                                                                                $type_add_nilai = 30;
                                                                                                                $nilai = 'nilai_bua_detail_6_add_XXX';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua_add_30';
                                                                                                            } else {
                                                                                                                $type_add_nilai = null;
                                                                                                                $nilai = 'nilai_bua_detail_1';
                                                                                                                $update_reusable = 'update_nilai_level_9_bua';
                                                                                                            }
                                                                                                        ?>
                                                                                                        <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_6[$nilai], 2, ',', '.') ?>
                                                                                                        </td>
                                                                                                        <td class="tg-0lax">
                                                                                                            <div class="btn-group">
                                                                                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                                                </button>
                                                                                                                <div class="dropdown-menu" role="menu">
                                                                                                                    <?php if ($value_detail_bua_6[$nilai] == null || $value_detail_bua_6[$nilai] == 0) { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php } else { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php    } ?>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                    <?php   } ?>
                                                                                                <?php } else { ?>
                                                                                                    <!-- kondisi_bua_detail_7 -->
                                                                                                    <?php
                                                                                                        $nilai = 'nilai_bua_detail_6';
                                                                                                        $update_reusable = 'update_nilai_level_9_bua';
                                                                                                        $type_add_nilai = null;
                                                                                                    ?>
                                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_6[$nilai], 2, ',', '.') ?>
                                                                                                    </td>
                                                                                                    <td class="tg-0lax">
                                                                                                        <div class="btn-group">
                                                                                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                                            </button>
                                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                                <?php if ($value_detail_bua_6[$nilai] == null || $value_detail_bua_6[$nilai] == 0) { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php   }  ?>
                                                                                                                <?php } else { ?>
                                                                                                                    <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php    } else { ?>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'hapus_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'edit_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'tambah_level_9_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                        <a onclick="modal_level_9_bua(<?= $value_detail_bua_6['id_detail_bua_6'] ?>,'urutan_level_9_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                    <?php   }  ?>
                                                                                                                <?php    } ?>
                                                                                                            </div>
                                                                                                        </div>
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
                                                                                                                                <span class="input-group-text">
                                                                                                                                    <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                                </span>
                                                                                                                                <input type="text" class="form-control" name="nilai_bua_detail_6" id="nilai_bua_detail_6" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div class="col-6">
                                                                                                                            <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_6_level_9_bua">
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </form>
                                                                                                        </div>
                                                                                                        <div class="modal-footer">
                                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                            <a href="javascript:;" style="display: none;" id="button_update_nilai_level_9_bua" class="btn btn-success button_simpan" onclick="Simpan_level_9_bua('update_nilai_level_9_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                            <a href="javascript:;" id="button_tambah_level_9_bua" class="btn btn-success button_simpan" onclick="Simpan_level_9_bua('tambah_level_9_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                            <a href="javascript:;" id="button_edit_level_9_bua" class="btn btn-success button_simpan" onclick="Simpan_level_9_bua('edit_level_9_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                                <tr style="font-family: RNSSanz-Medium;font-size:14px;">
                                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Medium;font-size:13px;">
                                                                                                        <?= $value_detail_bua_7['no_urut_7_bua'] ?> </td>
                                                                                                    </td>
                                                                                                    <td class="tg-0lax"> <?= $value_detail_bua_7['nama_uraian_7_bua'] ?></td>
                                                                                                    <?php if ($adendum_result) { ?>
                                                                                                        <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                            <?php
                                                                                                                if ($value['no_adendum'] == 1) {
                                                                                                                    $type_add_nilai = 1;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_I';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_1';
                                                                                                                } else if ($value['no_adendum'] == 2) {
                                                                                                                    $type_add_nilai = 2;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_II';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_2';
                                                                                                                } else if ($value['no_adendum'] == 3) {
                                                                                                                    $type_add_nilai = 3;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_III';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_3';
                                                                                                                } else if ($value['no_adendum'] == 4) {
                                                                                                                    $type_add_nilai = 4;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_IV';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_4';
                                                                                                                } else if ($value['no_adendum'] == 5) {
                                                                                                                    $type_add_nilai = 5;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_V';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_5';
                                                                                                                } else if ($value['no_adendum'] == 6) {
                                                                                                                    $type_add_nilai = 6;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_VI';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_6';
                                                                                                                } else if ($value['no_adendum'] == 7) {
                                                                                                                    $type_add_nilai = 7;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_VII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_7';
                                                                                                                } else if ($value['no_adendum'] == 8) {
                                                                                                                    $type_add_nilai = 8;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_VIII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_8';
                                                                                                                } else if ($value['no_adendum'] == 9) {
                                                                                                                    $type_add_nilai = 9;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_IX';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_9';
                                                                                                                } else if ($value['no_adendum'] == 10) {
                                                                                                                    $type_add_nilai = 10;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_X';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_10';
                                                                                                                } else if ($value['no_adendum'] == 11) {
                                                                                                                    $type_add_nilai = 11;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XI';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_11';
                                                                                                                } else if ($value['no_adendum'] == 12) {
                                                                                                                    $type_add_nilai = 12;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_12';
                                                                                                                } else if ($value['no_adendum'] == 13) {
                                                                                                                    $type_add_nilai = 13;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XIII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_13';
                                                                                                                } else if ($value['no_adendum'] == 14) {
                                                                                                                    $type_add_nilai = 14;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XIV';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_14';
                                                                                                                } else if ($value['no_adendum'] == 15) {
                                                                                                                    $type_add_nilai = 15;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XV';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_15';
                                                                                                                } else if ($value['no_adendum'] == 16) {
                                                                                                                    $type_add_nilai = 16;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XVI';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_16';
                                                                                                                } else if ($value['no_adendum'] == 17) {
                                                                                                                    $type_add_nilai = 17;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XVII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_17';
                                                                                                                } else if ($value['no_adendum'] == 18) {
                                                                                                                    $type_add_nilai = 18;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XVIII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_18';
                                                                                                                } else if ($value['no_adendum'] == 19) {
                                                                                                                    $type_add_nilai = 19;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XIX';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_19';
                                                                                                                } else if ($value['no_adendum'] == 20) {
                                                                                                                    $type_add_nilai = 20;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XX';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_20';
                                                                                                                } else if ($value['no_adendum'] == 21) {
                                                                                                                    $type_add_nilai = 21;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXI';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_21';
                                                                                                                } else if ($value['no_adendum'] == 22) {
                                                                                                                    $type_add_nilai = 22;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_22';
                                                                                                                } else if ($value['no_adendum'] == 23) {
                                                                                                                    $type_add_nilai = 23;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXIII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_23';
                                                                                                                } else if ($value['no_adendum'] == 24) {
                                                                                                                    $type_add_nilai = 24;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXIV';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_24';
                                                                                                                } else if ($value['no_adendum'] == 25) {
                                                                                                                    $type_add_nilai = 25;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXV';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_25';
                                                                                                                } else if ($value['no_adendum'] == 26) {
                                                                                                                    $type_add_nilai = 26;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXVI';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_26';
                                                                                                                } else if ($value['no_adendum'] == 27) {
                                                                                                                    $type_add_nilai = 27;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXVII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_27';
                                                                                                                } else if ($value['no_adendum'] == 28) {
                                                                                                                    $type_add_nilai = 28;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXVIII';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_28';
                                                                                                                } else if ($value['no_adendum'] == 29) {
                                                                                                                    $type_add_nilai = 29;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXIX';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_29';
                                                                                                                } else if ($value['no_adendum'] == 30) {
                                                                                                                    $type_add_nilai = 30;
                                                                                                                    $nilai = 'nilai_bua_detail_7_add_XXX';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua_add_30';
                                                                                                                } else {
                                                                                                                    $type_add_nilai = null;
                                                                                                                    $nilai = 'nilai_bua_detail_1';
                                                                                                                    $update_reusable = 'update_nilai_level_10_bua';
                                                                                                                }
                                                                                                            ?>
                                                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_7[$nilai], 2, ',', '.') ?>
                                                                                                            </td>
                                                                                                            <td class="tg-0lax">
                                                                                                                <div class="btn-group">
                                                                                                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                                    </button>
                                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                                        <?php if ($value_detail_bua_7[$nilai] == null || $value_detail_bua_7[$nilai] == 0) { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php } else { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php    } ?>
                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </td>
                                                                                                        <?php   } ?>
                                                                                                    <?php } else { ?>
                                                                                                        <!-- kondisi_bua_detail_8 -->
                                                                                                        <?php
                                                                                                            $nilai = 'nilai_bua_detail_7';
                                                                                                            $update_reusable = 'update_nilai_level_10_bua';
                                                                                                            $type_add_nilai = null;
                                                                                                        ?>
                                                                                                        <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_7[$nilai], 2, ',', '.') ?>
                                                                                                        </td>
                                                                                                        <td class="tg-0lax">
                                                                                                            <div class="btn-group">
                                                                                                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                                                                </button>
                                                                                                                <div class="dropdown-menu" role="menu">
                                                                                                                    <?php if ($value_detail_bua_7[$nilai] == null || $value_detail_bua_7[$nilai] == 0) { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_8) { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php } else { ?>
                                                                                                                        <?php if ($kondisi_bua_detail_8) { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php    } else { ?>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'hapus_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'edit_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'tambah_level_10_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                            <a onclick="modal_level_10_bua(<?= $value_detail_bua_7['id_detail_bua_7'] ?>,'urutan_level_10_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                        <?php   }  ?>
                                                                                                                    <?php    } ?>
                                                                                                                </div>
                                                                                                            </div>
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
                                                                                                                        <label for="">Nilai</label>
                                                                                                                        <div class="row">
                                                                                                                            <div class="col-6">
                                                                                                                                <div class="input-group-prepend">
                                                                                                                                    <span class="input-group-text">
                                                                                                                                        <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                                    </span>
                                                                                                                                    <input type="text" class="form-control" name="nilai_bua_detail_7" id="nilai_bua_detail_7" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                            <div class="col-6">
                                                                                                                                <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_7_level_10_bua">
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </form>
                                                                                                            </div>
                                                                                                            <div class="modal-footer">
                                                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                <a href="javascript:;" style="display: none;" id="button_update_nilai_level_10_bua" class="btn btn-success button_simpan" onclick="Simpan_level_10_bua('update_nilai_level_10_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                                <a href="javascript:;" id="button_tambah_level_10_bua" class="btn btn-success button_simpan" onclick="Simpan_level_10_bua('tambah_level_10_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                                <a href="javascript:;" id="button_edit_level_10_bua" class="btn btn-success button_simpan" onclick="Simpan_level_10_bua('edit_level_10_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                                    <tr style="font-family: RNSSanz-Medium;font-size:14px;">
                                                                                                        <td class="tg-0lax">
                                                                                                            <?= $value_detail_bua_8['no_urut_8_bua'] ?> </td>
                                                                                                        <td class="tg-0lax"> <?= $value_detail_bua_8['nama_uraian_8_bua'] ?></td>
                                                                                                        <?php if ($adendum_result) { ?>
                                                                                                            <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                                <?php
                                                                                                                    if ($value['no_adendum'] == 1) {
                                                                                                                        $type_add_nilai = 1;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_I';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_1';
                                                                                                                    } else if ($value['no_adendum'] == 2) {
                                                                                                                        $type_add_nilai = 2;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_II';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_2';
                                                                                                                    } else if ($value['no_adendum'] == 3) {
                                                                                                                        $type_add_nilai = 3;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_III';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_3';
                                                                                                                    } else if ($value['no_adendum'] == 4) {
                                                                                                                        $type_add_nilai = 4;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_IV';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_4';
                                                                                                                    } else if ($value['no_adendum'] == 5) {
                                                                                                                        $type_add_nilai = 5;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_V';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_5';
                                                                                                                    } else if ($value['no_adendum'] == 6) {
                                                                                                                        $type_add_nilai = 6;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_VI';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_6';
                                                                                                                    } else if ($value['no_adendum'] == 7) {
                                                                                                                        $type_add_nilai = 7;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_VII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_7';
                                                                                                                    } else if ($value['no_adendum'] == 8) {
                                                                                                                        $type_add_nilai = 8;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_VIII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_8';
                                                                                                                    } else if ($value['no_adendum'] == 9) {
                                                                                                                        $type_add_nilai = 9;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_IX';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_9';
                                                                                                                    } else if ($value['no_adendum'] == 10) {
                                                                                                                        $type_add_nilai = 10;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_X';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_10';
                                                                                                                    } else if ($value['no_adendum'] == 11) {
                                                                                                                        $type_add_nilai = 11;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XI';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_11';
                                                                                                                    } else if ($value['no_adendum'] == 12) {
                                                                                                                        $type_add_nilai = 12;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_12';
                                                                                                                    } else if ($value['no_adendum'] == 13) {
                                                                                                                        $type_add_nilai = 13;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XIII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_13';
                                                                                                                    } else if ($value['no_adendum'] == 14) {
                                                                                                                        $type_add_nilai = 14;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XIV';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_14';
                                                                                                                    } else if ($value['no_adendum'] == 15) {
                                                                                                                        $type_add_nilai = 15;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XV';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_15';
                                                                                                                    } else if ($value['no_adendum'] == 16) {
                                                                                                                        $type_add_nilai = 16;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XVI';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_16';
                                                                                                                    } else if ($value['no_adendum'] == 17) {
                                                                                                                        $type_add_nilai = 17;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XVII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_17';
                                                                                                                    } else if ($value['no_adendum'] == 18) {
                                                                                                                        $type_add_nilai = 18;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XVIII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_18';
                                                                                                                    } else if ($value['no_adendum'] == 19) {
                                                                                                                        $type_add_nilai = 19;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XIX';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_19';
                                                                                                                    } else if ($value['no_adendum'] == 20) {
                                                                                                                        $type_add_nilai = 20;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XX';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_20';
                                                                                                                    } else if ($value['no_adendum'] == 21) {
                                                                                                                        $type_add_nilai = 21;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXI';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_21';
                                                                                                                    } else if ($value['no_adendum'] == 22) {
                                                                                                                        $type_add_nilai = 22;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_22';
                                                                                                                    } else if ($value['no_adendum'] == 23) {
                                                                                                                        $type_add_nilai = 23;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXIII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_23';
                                                                                                                    } else if ($value['no_adendum'] == 24) {
                                                                                                                        $type_add_nilai = 24;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXIV';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_24';
                                                                                                                    } else if ($value['no_adendum'] == 25) {
                                                                                                                        $type_add_nilai = 25;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXV';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_25';
                                                                                                                    } else if ($value['no_adendum'] == 26) {
                                                                                                                        $type_add_nilai = 26;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXVI';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_26';
                                                                                                                    } else if ($value['no_adendum'] == 27) {
                                                                                                                        $type_add_nilai = 27;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXVII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_27';
                                                                                                                    } else if ($value['no_adendum'] == 28) {
                                                                                                                        $type_add_nilai = 28;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXVIII';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_28';
                                                                                                                    } else if ($value['no_adendum'] == 29) {
                                                                                                                        $type_add_nilai = 29;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXIX';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_29';
                                                                                                                    } else if ($value['no_adendum'] == 30) {
                                                                                                                        $type_add_nilai = 30;
                                                                                                                        $nilai = 'nilai_bua_detail_8_add_XXX';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua_add_30';
                                                                                                                    } else {
                                                                                                                        $type_add_nilai = null;
                                                                                                                        $nilai = 'nilai_bua_detail_1';
                                                                                                                        $update_reusable = 'update_nilai_level_11_bua';
                                                                                                                    }
                                                                                                                ?>
                                                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_8[$nilai], 2, ',', '.') ?>
                                                                                                                </td>
                                                                                                                <td class="tg-0lax">

                                                                                                                    <div class="btn-group">
                                                                                                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                                                        </button>
                                                                                                                        <div class="dropdown-menu" role="menu">
                                                                                                                            <?php if ($value_detail_bua_8[$nilai] == null || $value_detail_bua_8[$nilai] == 0) { ?>
                                                                                                                                <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php   }  ?>
                                                                                                                            <?php } else { ?>
                                                                                                                                <?php if ($kondisi_bua_detail_7) { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php   }  ?>
                                                                                                                            <?php    } ?>
                                                                                                                        </div>
                                                                                                                    </div>


                                                                                                                </td>
                                                                                                            <?php   } ?>
                                                                                                        <?php } else { ?>
                                                                                                            <!-- kondisi_bua_detail_9 -->
                                                                                                            <?php
                                                                                                                $nilai = 'nilai_bua_detail_8';
                                                                                                                $update_reusable = 'update_nilai_level_11_bua';
                                                                                                                $type_add_nilai = null;
                                                                                                            ?>
                                                                                                            <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_8[$nilai], 2, ',', '.') ?>
                                                                                                            </td>
                                                                                                            <td class="tg-0lax">
                                                                                                                <div class="btn-group">
                                                                                                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                                                                    </button>
                                                                                                                    <div class="dropdown-menu" role="menu">
                                                                                                                        <?php if ($value_detail_bua_8[$nilai] == null || $value_detail_bua_8[$nilai] == 0) { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_9) { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php } else { ?>
                                                                                                                            <?php if ($kondisi_bua_detail_9) { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php    } else { ?>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'hapus_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'edit_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'tambah_level_11_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                <a onclick="modal_level_11_bua(<?= $value_detail_bua_8['id_detail_bua_8'] ?>,'urutan_level_11_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                            <?php   }  ?>
                                                                                                                        <?php    } ?>
                                                                                                                    </div>
                                                                                                                </div>
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
                                                                                                                            <label for="">Nilai</label>
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-6">
                                                                                                                                    <div class="input-group-prepend">
                                                                                                                                        <span class="input-group-text">
                                                                                                                                            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                                        </span>
                                                                                                                                        <input type="text" class="form-control" name="nilai_bua_detail_8" id="nilai_bua_detail_8" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <div class="col-6">
                                                                                                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_8_level_11_bua">
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </form>
                                                                                                                </div>
                                                                                                                <div class="modal-footer">
                                                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                    <a href="javascript:;" style="display: none;" id="button_update_nilai_level_11_bua" class="btn btn-success button_simpan" onclick="Simpan_level_11_bua('update_nilai_level_11_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                                    <a href="javascript:;" id="button_tambah_level_11_bua" class="btn btn-success button_simpan" onclick="Simpan_level_11_bua('tambah_level_11_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                                    <a href="javascript:;" id="button_edit_level_11_bua" class="btn btn-success button_simpan" onclick="Simpan_level_11_bua('edit_level_11_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                                                                $kondisi_bua_detail_10 = $this->db->get()->result_array() ?>
                                                                                                        <tr style="font-family: RNSSanz-Medium;font-size:14px;">
                                                                                                            <td class="tg-0lax">
                                                                                                                <?= $value_detail_bua_9['no_urut_9_bua'] ?> </td>
                                                                                                            </td>
                                                                                                            <td class="tg-0lax"> <?= $value_detail_bua_9['nama_uraian_9_bua'] ?></td>
                                                                                                            <?php if ($adendum_result) { ?>
                                                                                                                <?php foreach ($adendum_result as $key => $value) { ?>
                                                                                                                    <?php
                                                                                                                        if ($value['no_adendum'] == 1) {
                                                                                                                            $type_add_nilai = 1;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_I';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_1';
                                                                                                                        } else if ($value['no_adendum'] == 2) {
                                                                                                                            $type_add_nilai = 2;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_II';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_2';
                                                                                                                        } else if ($value['no_adendum'] == 3) {
                                                                                                                            $type_add_nilai = 3;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_III';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_3';
                                                                                                                        } else if ($value['no_adendum'] == 4) {
                                                                                                                            $type_add_nilai = 4;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_IV';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_4';
                                                                                                                        } else if ($value['no_adendum'] == 5) {
                                                                                                                            $type_add_nilai = 5;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_V';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_5';
                                                                                                                        } else if ($value['no_adendum'] == 6) {
                                                                                                                            $type_add_nilai = 6;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_VI';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_6';
                                                                                                                        } else if ($value['no_adendum'] == 7) {
                                                                                                                            $type_add_nilai = 7;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_VII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_7';
                                                                                                                        } else if ($value['no_adendum'] == 8) {
                                                                                                                            $type_add_nilai = 8;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_VIII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_8';
                                                                                                                        } else if ($value['no_adendum'] == 9) {
                                                                                                                            $type_add_nilai = 9;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_IX';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_9';
                                                                                                                        } else if ($value['no_adendum'] == 10) {
                                                                                                                            $type_add_nilai = 10;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_X';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_10';
                                                                                                                        } else if ($value['no_adendum'] == 11) {
                                                                                                                            $type_add_nilai = 11;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XI';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_11';
                                                                                                                        } else if ($value['no_adendum'] == 12) {
                                                                                                                            $type_add_nilai = 12;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_12';
                                                                                                                        } else if ($value['no_adendum'] == 13) {
                                                                                                                            $type_add_nilai = 13;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XIII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_13';
                                                                                                                        } else if ($value['no_adendum'] == 14) {
                                                                                                                            $type_add_nilai = 14;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XIV';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_14';
                                                                                                                        } else if ($value['no_adendum'] == 15) {
                                                                                                                            $type_add_nilai = 15;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XV';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_15';
                                                                                                                        } else if ($value['no_adendum'] == 16) {
                                                                                                                            $type_add_nilai = 16;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XVI';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_16';
                                                                                                                        } else if ($value['no_adendum'] == 17) {
                                                                                                                            $type_add_nilai = 17;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XVII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_17';
                                                                                                                        } else if ($value['no_adendum'] == 18) {
                                                                                                                            $type_add_nilai = 18;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XVIII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_18';
                                                                                                                        } else if ($value['no_adendum'] == 19) {
                                                                                                                            $type_add_nilai = 19;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XIX';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_19';
                                                                                                                        } else if ($value['no_adendum'] == 20) {
                                                                                                                            $type_add_nilai = 20;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XX';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_20';
                                                                                                                        } else if ($value['no_adendum'] == 21) {
                                                                                                                            $type_add_nilai = 21;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXI';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_21';
                                                                                                                        } else if ($value['no_adendum'] == 22) {
                                                                                                                            $type_add_nilai = 22;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_22';
                                                                                                                        } else if ($value['no_adendum'] == 23) {
                                                                                                                            $type_add_nilai = 23;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXIII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_23';
                                                                                                                        } else if ($value['no_adendum'] == 24) {
                                                                                                                            $type_add_nilai = 24;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXIV';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_24';
                                                                                                                        } else if ($value['no_adendum'] == 25) {
                                                                                                                            $type_add_nilai = 25;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXV';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_25';
                                                                                                                        } else if ($value['no_adendum'] == 26) {
                                                                                                                            $type_add_nilai = 26;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXVI';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_26';
                                                                                                                        } else if ($value['no_adendum'] == 27) {
                                                                                                                            $type_add_nilai = 27;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXVII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_27';
                                                                                                                        } else if ($value['no_adendum'] == 28) {
                                                                                                                            $type_add_nilai = 28;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXVIII';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_28';
                                                                                                                        } else if ($value['no_adendum'] == 29) {
                                                                                                                            $type_add_nilai = 29;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXIX';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_29';
                                                                                                                        } else if ($value['no_adendum'] == 30) {
                                                                                                                            $type_add_nilai = 30;
                                                                                                                            $nilai = 'nilai_bua_detail_9_add_XXX';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua_add_30';
                                                                                                                        } else {
                                                                                                                            $type_add_nilai = null;
                                                                                                                            $nilai = 'nilai_bua_detail_1';
                                                                                                                            $update_reusable = 'update_nilai_level_12_bua';
                                                                                                                        }
                                                                                                                    ?>
                                                                                                                    <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_9[$nilai], 2, ',', '.') ?>
                                                                                                                    </td>
                                                                                                                    <td class="tg-0lax">

                                                                                                                        <div class="btn-group">
                                                                                                                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                            <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                                <span class="sr-only">Toggle Dropdown</span>
                                                                                                                            </button>
                                                                                                                            <div class="dropdown-menu" role="menu">
                                                                                                                                <?php if ($value_detail_bua_9[$nilai] == null || $value_detail_bua_9[$nilai] == 0) { ?>
                                                                                                                                    <?php if ($kondisi_bua_detail_10) { ?>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                    <?php    } else { ?>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'hapus_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                    <?php   }  ?>
                                                                                                                                <?php } else { ?>
                                                                                                                                    <?php if ($kondisi_bua_detail_10) { ?>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                    <?php    } else { ?>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'hapus_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                        <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                    <?php   }  ?>
                                                                                                                                <?php    } ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </td>
                                                                                                                <?php   } ?>

                                                                                                            <?php } else { ?>
                                                                                                                <!-- kondisi_bua_detail_10 -->
                                                                                                                <?php
                                                                                                                    $nilai = 'nilai_bua_detail_9';
                                                                                                                    $update_reusable = 'update_nilai_level_12_bua';
                                                                                                                    $type_add_nilai = null;
                                                                                                                ?>
                                                                                                                <td class="tg-0lax" style="font-family: RNSSanz-Bold;font-size:13px;"> <?= number_format($value_detail_bua_9[$nilai], 2, ',', '.') ?>
                                                                                                                </td>
                                                                                                                <td class="tg-0lax">
                                                                                                                    <div class="btn-group">
                                                                                                                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                                                                                        <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                                                                                            <span class="sr-only">Toggle Dropdown</span>
                                                                                                                        </button>
                                                                                                                        <div class="dropdown-menu" role="menu">
                                                                                                                            <?php if ($value_detail_bua_9[$nilai] == null || $value_detail_bua_9[$nilai] == 0) { ?>
                                                                                                                                <?php if ($kondisi_bua_detail_10) { ?>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'hapus_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php   }  ?>
                                                                                                                            <?php } else { ?>
                                                                                                                                <?php if ($kondisi_bua_detail_10) { ?>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php    } else { ?>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'<?= $update_reusable ?>')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Masukan Nilai Turunan"><i class="fas fa-dollar-sign"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'hapus_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus Turunan"><i class="fas fa-trash"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'edit_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit Turunan"><i class="fas fa-edit"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'tambah_level_12_bua_excel', <?= $type_add_nilai ?>)" class="btn btn-sm btn-success" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Dengan Excel"><i class="fas fa-file"></i></a>
                                                                                                                                    <a onclick="modal_level_12_bua(<?= $value_detail_bua_9['id_detail_bua_9'] ?>,'urutan_level_12_bua',<?= $type_add_nilai ?>)" class="btn btn-sm btn-info" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Pindahkan Level Turunan"><i class="fas fa fa-list-ol"></i></a>
                                                                                                                                <?php   }  ?>
                                                                                                                            <?php    } ?>
                                                                                                                        </div>
                                                                                                                    </div>
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
                                                                                                                                <label for="">Nilai</label>
                                                                                                                                <div class="row">
                                                                                                                                    <div class="col-6">
                                                                                                                                        <div class="input-group-prepend">
                                                                                                                                            <span class="input-group-text">
                                                                                                                                                <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                                                                                                            </span>
                                                                                                                                            <input type="text" class="form-control" name="nilai_bua_detail_9" id="nilai_bua_detail_9" aria-describedby="helpId" placeholder="Jumlah Nilai">
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <div class="col-6">
                                                                                                                                        <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="rupiah_nilai_bua_detail_9_level_12_bua">
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </form>
                                                                                                                    </div>

                                                                                                                    <div class="modal-footer">
                                                                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                                                        <a href="javascript:;" style="display: none;" id="button_update_nilai_level_12_bua" class="btn btn-success button_simpan" onclick="Simpan_level_12_bua('update_nilai_level_12_bua',<?= $type_add_nilai ?>)">Simpan</a>
                                                                                                                        <a href="javascript:;" id="button_tambah_level_12_bua" class="btn btn-success button_simpan" onclick="Simpan_level_12_bua('tambah_level_12_bua',<?= $type_add_nilai ?>)">Update</a>
                                                                                                                        <a href="javascript:;" id="button_edit_level_12_bua" class="btn btn-success button_simpan" onclick="Simpan_level_12_bua('edit_level_12_bua',<?= $type_add_nilai ?>)">Edit</a>
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
                                                                <?php   } ?>
                                                                <!-- Modal -->
                                                                <!-- modal_bua_urutan_3 -->