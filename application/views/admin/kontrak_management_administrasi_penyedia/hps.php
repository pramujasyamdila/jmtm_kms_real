<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">(<?= $nama_kontrak['nama_kontrak'] ?>) (<?= $nama_kontrak['tahun_anggaran'] ?>) - Lembar Kerja - Pra Pengadaan</b>
        </nav>
        <input type="hidden" name="id_program_ku" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h6>MODUL 2 - PRA PENGADAAN</h6>
            <h6 for="">Nama Pekerjaan : <?= $row_program['nama_pekerjaan_program_mata_anggaran'] ?></h6>
        </div>
        <div class="card" style="margin-top: -20px; padding: 10px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h6 for="">
                Note! <br>
                Setelah Anda Selesai Membuat DKH Harap Lakukan Validasi Dengan Menklik Tombol Simpan Dan Update Yang Berada Pada Bawah Table
            </h6>
        </div>
        <div class="card" style="margin-top: -20px; padding: 10px;">
            <div class="container-fluid">
                <div class="form-group">
                    <!-- <label for="">Tahun Anggaran</label>
                    <select name="tahun_anggaran_rekap" style="width: 200px;" onchange="pilih_tahun_rekap('<?= $row_program['id_detail_program_penyedia_jasa'] ?>')" class="form-control" id="">
                        <?php $i = 0;
                        for ($i = 20; $i <= 30; $i++) {  ?>
                            <option value="20<?= $i ?>">20<?= $i ?></option>
                        <?php  } ?>
                    </select> -->
                    <br>
                    <ul class="nav nav-tabs" id="myTab">
                        <li>
                            <a style="background-color:#193B53;" class="nav-link text-white" href="#rekap">Penjelasan Rekap</a>
                        </li>
                        <?php foreach ($result_sub_program as $key => $value) { ?>
                            <li>
                                <a style="background-color:#193B53;" class="nav-link text-white" href="#kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>"><?= $value['nama_program_mata_anggaran'] ?></a>
                            </li>
                        <?php  } ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding: 20px;">
            <div class="tab-content">
                <?php foreach ($result_sub_program as $key => $value) { ?>
                    <div class="modal fade" data-backdrop="false" id="modal_tambah_dkh" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title">Tambah Uraian</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="javascript:;" id="form_tambah" method="post">
                                        <!-- hps_penyedia_1 -->
                                        <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                                        <input type="hidden" name="id_detail_program_penyedia_jasa">
                                        <input type="hidden" name="id_hps_penyedia_1">
                                        <input type="hidden" name="id_hps_penyedia_2">
                                        <input type="hidden" name="id_hps_penyedia_3">
                                        <input type="hidden" name="id_hps_penyedia_4">
                                        <input type="hidden" name="id_hps_penyedia_5">
                                        <!--  -->
                                        <div class="form-group">
                                            <label for="">No Mata Anggaran</label>
                                            <input type="text" name="no_hps" required class="form-control form-control-sm" placeholder="No Hps">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Uraian</label>
                                            <input type="text" name="uraian_hps" required class="form-control form-control-sm" placeholder="Uraian">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Satuan</label>
                                            <input type="text" name="satuan_hps" required class="form-control form-control-sm" placeholder="Satuan">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Volume</label>
                                            <input type="number" id="volume" required name="volume_hps" class="form-control form-control-sm" placeholder="Volume">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tkdn</label>
                                            <input type="number" id="tkdn" required name="tkdn" class="form-control form-control-sm" placeholder="Tkdn">
                                        </div>
                                        <label for="">Harga Satuan</label>
                                        <div class="input-group mb-3">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="fa fa-money-bill-alt" aria-hidden="true"></i>
                                                        </span>
                                                        <input type="number" class="form-control" name="harga_satuan_hps" id="harga_satuan_hps" aria-describedby="helpId" placeholder="Harga Satuan">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" disabled class="float-right form-control form-control-sm mt-1" style="width: 200px;" id="tanpa-rupiah2">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <!-- simpan -->
                                    <button type="button" style="display: none;" class="btn btn-primary" id="simpan_1" onclick="save_hps_penyedia_1('simpan')">Save</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="simpan_2" onclick="save_hps_penyedia_2('simpan')">Save 2</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="simpan_3" onclick="save_hps_penyedia_3('simpan')">Save 3</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="simpan_4" onclick="save_hps_penyedia_4('simpan')">Save 4</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="simpan_5" onclick="save_hps_penyedia_5('simpan')">Save 5</button>
                                    <!-- edit -->
                                    <button type="button" style="display: none;" class="btn btn-primary" id="edit_1" onclick="save_hps_penyedia_1('edit')">Update</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="edit_2" onclick="save_hps_penyedia_2('edit')">Update 2</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="edit_3" onclick="save_hps_penyedia_3('edit')">Update 3</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="edit_4" onclick="save_hps_penyedia_4('edit')">Update 4</button>
                                    <button type="button" style="display: none;" class="btn btn-primary" id="edit_5" onclick="save_hps_penyedia_5('edit')">Update 5</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="kirun<?= $value['id_detail_sub_program_penyedia_jasa'] ?>">
                        <br>
                        <div class="card-header" style="margin-top:-50px">
                            <h4> DKH <?= $value['nama_program_mata_anggaran'] ?></h4>
                            <div class="card-header-action">
                                <a class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>)"> <i class="fas fa fa-file"></i> Buat Uraian Dengan Excel</a>
                                <a class="btn btn-sm btn-info" href="javascript:;" onclick="tambah_uraian(<?= $value['id_detail_sub_program_penyedia_jasa'] ?>)"><i class="fas fa fa-plus"></i> Buat Uraian</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table id="table_data" class="table table-bordered table-striped">
                                    <thead style="background-color:#193B53;font-family: RNSSanz-Black;text-transform: uppercase;" class="thead-inverse">
                                        <tr>
                                            <th class="text-white">No</th>
                                            <th class="text-white">Nomor Mata Pembayaran</th>
                                            <th class="text-white">Uraian</th>
                                            <th class="text-white">Satuan</th>
                                            <th class="text-white">Kuantitas</th>
                                            <th class="text-white">Harga Satuan</th>
                                            <th class="text-white">Jumlah Harga</th>
                                            <th class="text-white">TKDN</th>
                                            <th class="text-white">Harga Satuan TKDN</th>
                                            <th class="text-white">Jumlah Harga TKDN</th>
                                            <th class="text-white">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 12px;">
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('tbl_hps_penyedia_1');
                                        $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                        $this->db->where('tbl_hps_penyedia_1.id_detail_sub_program_penyedia_jasa', $value['id_detail_sub_program_penyedia_jasa']);
                                        $this->db->order_by('id_hps_penyedia_1', 'ASC');
                                        $query_tbl_hps_penyedia_1 = $this->db->get() ?>
                                        <?php
                                        $no = 1;
                                        $total_hps_penyedia_1 = 0;
                                        foreach ($query_tbl_hps_penyedia_1->result_array() as $key => $value_hps_penyedia_1) { ?>
                                            <?php
                                            $id_hps_penyedia_1 = $value_hps_penyedia_1['id_hps_penyedia_1'];
                                            $this->db->select('*');
                                            $this->db->from('tbl_hps_penyedia_2');
                                            $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $value_hps_penyedia_1['id_hps_penyedia_1']);
                                            $query_cek_tbl_hps_penyedia_2 = $this->db->get()->result_array();
                                            if ($value_hps_penyedia_1['total_harga']) {
                                                $total_hps_penyedia_1 +=  $value_hps_penyedia_1['total_harga'];
                                            } else {
                                                $total_hps_penyedia_1 +=  0;
                                            }
                                            ?>
                                            <tr class="text-black">
                                                <td> &nbsp;<?= $no++ ?></td>
                                                <td><?= $value_hps_penyedia_1['no_hps'] ?></td>
                                                <td><?= $value_hps_penyedia_1['uraian_hps'] ?></td>
                                                <td><?= $value_hps_penyedia_1['satuan_hps'] ?></td>
                                                <td><?= number_format($value_hps_penyedia_1['volume_hps'], 2, ',', '.')  ?></td>
                                                <?php if ($value_hps_penyedia_1['harga_satuan_hps']) { ?>
                                                    <td><?= "Rp " . number_format($value_hps_penyedia_1['harga_satuan_hps'], 2, ',', '.') ?></td>
                                                <?php  } else { ?>
                                                    <td></td>
                                                <?php }
                                                ?>
                                                <?php if ($value_hps_penyedia_1['total_harga']) { ?>
                                                    <td><?= "Rp " . number_format($value_hps_penyedia_1['total_harga'], 2, ',', '.') ?></td>
                                                <?php  } else { ?>
                                                    <td></td>
                                                <?php }
                                                ?>
                                                <td><?= number_format($value_hps_penyedia_1['tkdn'], 2, ',', '.')  ?>%</td>
                                                <td><?= "Rp " . number_format($value_hps_penyedia_1['harga_satuan_tkdn'], 2, ',', '.') ?></td>
                                                <td><?= "Rp " . number_format($value_hps_penyedia_1['jumlah_harga_tkdn'], 2, ',', '.') ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default"><i class="fa fa-cogs" aria-hidden="true"></i></button>
                                                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                                            <span class="sr-only">Toggle Dropdown</span>
                                                        </button>
                                                        <div class="dropdown-menu" role="menu">
                                                            <?php if ($query_cek_tbl_hps_penyedia_2) { ?>
                                                                <!-- <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a> -->
                                                                <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                <a title="Pindahkan Urutan" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-info" href="javascript:;" onclick="pindah_urutan_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"><i class="fa fa-list-ol" aria-hidden="true"></i></a>
                                                            <?php   } else { ?>
                                                                <?php if ($value_hps_penyedia_1['total_harga']) { ?>
                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                    <a title="Pindahkan Urutan" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-info" href="javascript:;" onclick="pindah_urutan_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"><i class="fa fa-list-ol" aria-hidden="true"></i></a>
                                                                <?php  } else { ?>
                                                                    <!-- <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)" class="btn btn-sm btn-primary" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Tambah Turunan"><i class="fas fa-plus"></i></a> -->
                                                                    <a title="Import Excel" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-success" href="javascript:;" onclick="tambah_uraian_excel_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"> <i class="fas fa fa-file"></i></a>
                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'edit')" class="btn btn-sm btn-warning" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                                                    <a onclick="modal_hps_penyedia_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>,'hapus')" class="btn btn-sm btn-danger" href="javascript:;" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-trash"></i></a>
                                                                    <a title="Pindahkan Urutan" data-toggle="tooltip" data-placement="top" class="btn btn-sm btn-info" href="javascript:;" onclick="pindah_urutan_2(<?= $value_hps_penyedia_1['id_hps_penyedia_1'] ?>)"><i class="fa fa-list-ol" aria-hidden="true"></i></a>
                                                                <?php } ?>
                                                            <?php  } ?>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">
                                                <label for="" style="font-size: 12px;">SUBTOTAL (SEBELUM PPN Rp.)</label>
                                            </td>
                                            <td colspan="4"></td>
                                            <?php                                                                       ?>
                                            <td>
                                                <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_hps_penyedia_1, 2, ',', '.') ?>
                                                </label>
                                            </td>
                                            <td colspan="3"></td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="" style="font-size: 12px;">PPN(<?= $value['ppn_hps'] ?>%)<?= $value['id_detail_sub_program_penyedia_jasa'] ?> <select name="ppn_hps<?= $value['id_detail_sub_program_penyedia_jasa'] ?>" onchange="pilih_ppn_sub_program('<?= $value['id_detail_sub_program_penyedia_jasa'] ?>')">
                                                        <option selected value="<?= $value['ppn_hps'] ?>">--Pilih PPN--</option>
                                                        <option value="10">10%</option>
                                                        <option value="11">11%</option>
                                                        <option value="12">12%</option>
                                                    </select></label>
                                            </td>
                                            <td colspan="4"></td>
                                            <?php
                                            $total_ppn = ($value['ppn_hps'] * $total_hps_penyedia_1) / 100;
                                            $total_setelah_ppn = $total_ppn + $total_hps_penyedia_1;
                                            ?>
                                            <td>
                                                <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_ppn, 2, ',', '.') ?>
                                                </label>
                                            </td>
                                            <td colspan="3"></td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label for="" style="font-size: 12px;">TOTAL (SETELAH PPN Rp.)</label>
                                            </td>
                                            <td colspan="4"></td>
                                            <?php                                                                       ?>
                                            <td>
                                                <label style="font-size: 12px;" for=""> <?= "Rp " . number_format($total_setelah_ppn, 2, ',', '.') ?>
                                                </label>
                                            </td>
                                            <td colspan="3"></td>
                                            <td>
                                                <a href="javascript:;" onclick="Update_nilai_ke_sub_program('<?= $value['id_detail_sub_program_penyedia_jasa'] ?>')" class="btn btn-sm btn-success"> <i class="fas fa fa-save"></i> Simpan Dan Update</a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <!-- Modal -->
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" data-backdrop="false" id="modal_excel_hps_penyedia_1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Buat Uraian Dengan Excel</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <div>
                                            <label for="">Download Format</label> <br>
                                            <a class="btn btn-success btn-sm" href="<?= base_url('file_excel_format/format_capex_1_hps.xlsx') ?>"> <i class="fas fa fa-file"></i> Download Format</a>
                                        </div>
                                    </center>
                                    <center>
                                        <label for="Divisi" style="font-weight: bold;" class="col-form-label">Upload Excel</label>
                                    </center>
                                    <?= form_open_multipart('excelisasi_kontrak_hps/Upload_excel_hps/upload_excel_hps_penyedia_1') ?>
                                    <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_program_penyedia_jasa">
                                    <input type="hidden" name="id_detail_sub_program_penyedia_jasa">
                                    <input type="hidden" name="id_kontrak" value="<?= $row_program['id_kontrak'] ?>">
                                    <div class="input-group">
                                        <input type="file" class="form-control form-control-sm" id="importexcel" aria-describedby="inputGroupFileAddon04" accept=".xlsx,.xls" name="importexcel" aria-label="Upload">
                                        <button class="btn btn-sm btn-success" type="submit" id="inputGroupFileAddon04"><img src="<?= base_url('assets/excel.png') ?>" style="width: 20px;" alt=""> UPLOAD</button>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" data-backdrop="false" id="modal_urutan2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h5 class="modal-title text-white">Pindahkan Urutan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>" name="id_detail_progrm_penyedia">
                                    <input type="hidden" value="<?= $value['id_detail_sub_program_penyedia_jasa'] ?>" name="id_detail_sub_program_penyedia_jasa">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No Urut</th>
                                                <th>Uraian</th>
                                            </tr>
                                        </thead>
                                        <tbody class="result_table_urutan">
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="<?= base_url('admin/administrasi_penyedia/buat_hps/' . $row_program['id_detail_program_penyedia_jasa']) ?>" class="btn btn-primary">Simpan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
                <div class="tab-pane fade show" id="rekap">
                    <br>
                    <div class="card-header" style="margin-top:-50px">
                        <h4> PENEJELASAN REKAP</h4>
                    </div>
                    <div class="card-body">
                        <br>
                        <div class="card">
                            <div class="card-header bg-warning text-white">
                                PENJELASAN REKAP
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Anggaran</th>
                                            <th>Subtotal (Sebelum PPN)</th>
                                            <th>PPN</th>
                                            <th>Subtotal (Setelah PPN)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1;
                                        foreach ($result_rekap_hps as $key => $value) { ?>
                                            <tr>
                                                <td><?= $nomor++ ?></td>
                                                <td><?= $value['nama_program_mata_anggaran'] ?></td>
                                                <td><?= "Rp " . number_format($value['total_sebelum_ppn'], 2, ',', '.') ?></td>
                                                <td><?= "Rp " . number_format($value['ppn'], 2, ',', '.') ?></td>
                                                <td><?= "Rp " . number_format($value['total_setelah_ppn'], 2, ',', '.') ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Modal -->
                    </div>
                </div>
            </div>
            <div class="content-wrapper">
                <br><br>
                <?php
                $total_hps = 0;
                ?>
                <!-- Content Header (Page header) -->
                <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $row_program['id_detail_program_penyedia_jasa'] ?>">
                <section class="content" style="margin-top: -20px">
                    <div class="container-fluid">
                    </div>


            </div>
        </div>
        <!-- /.col -->
</div>
</section>
</div>