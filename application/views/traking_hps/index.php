<!-- Content Wrapper. Contains page content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1><i class="fa fa-book"></i> TRACKING HARGA SATUAN</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?= base_url('traking_hps/traking_hps') ?>">TRACKING HARGA SATUAN</a></div>
            </div>
        </div>

        <div class="content-wrapper" style="background-color:white">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-12">
                                <div class="card card-outline card-warning">
                                    <div class="card-header">
                                        <h5> <i class="fa fa-book"></i> TRAKING HARGA SATUAN</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">

                                            </div>
                                            <div class="col-md-12">
                                                <div class="card card-primary">
                                                    <div class="card-header text-center">
                                                        <h6> <i class="fa fa-search-plus" aria-hidden="true"></i> FILTER KONTRAK</h6>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <?php if ($id_departemen == 4) { ?>
                                                                <div class="col-md-12">
                                                                    <div style="overflow-x: auto;">
                                                                        <table class="table table-bordered table-striped">
                                                                            <thead class="text-center bg-warning">
                                                                                <tr>
                                                                                    <th> class="text-white"Osperasi</th>
                                                                                    <th> class="text-white"Area</th>
                                                                                    <th class="text-white">Sub Area</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="text-center">
                                                                                <tr>
                                                                                    <td>
                                                                                        <select name="id_departemen" onchange="get_area()" class="form-control id_departemen">
                                                                                            <option value="">--Pilih Operasi--</option>
                                                                                            <?php foreach ($get_departemen_all as $key => $value) { ?>
                                                                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                            <?php  } ?>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control id_area">
                                                                                            <option value="">--Pilih Area--</option>
                                                                                        </select>
                                                                                    </td>
                                                                                    <td>
                                                                                        <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                                                                            <option value="">--Pilih Sub Area--</option>
                                                                                        </select>
                                                                                    </td>
                                                                                    <div class="form-group">
                                                                                        <label for=""></label>
                                                                                        <input type="text" name="uraian" class="form-control" placeholder="Cari Uraian">
                                                                                    </div>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                        <!-- <div class="table" id="insert-lokasi"></div> -->
                                                                    </div>
                                                                </div>
                                                            <?php } else { ?>
                                                                <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                                                                    <div class="col-md-12">
                                                                        <div style="overflow-x: auto;">
                                                                            <table class="table table-bordered table-striped">
                                                                                <thead class="text-center bg-warning">
                                                                                    <tr>
                                                                                        <th class="text-white">Operasi</th>
                                                                                        <th class="text-white">Area</th>
                                                                                        <th class="text-white">Sub Area</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="text-center">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <select name="id_departemen" onchange="get_area()" class="form-control">
                                                                                                <option value="">--Pilih Operasi--</option>
                                                                                                <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                                <?php  } ?>
                                                                                            </select>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select name="id_area" id="get_area" onchange="get_sub_area()" class="form-control">
                                                                                                <option value="">--Pilih Area--</option>
                                                                                            </select>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                                                                <option value="">--Pilih Sub Area--</option>
                                                                                            </select>
                                                                                        </td>

                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!-- <div class="table" id="insert-lokasi"></div> -->
                                                                        </div>
                                                                    </div>

                                                                <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                                                                    <div class="col-md-12">
                                                                        <div style="overflow-x: auto;">
                                                                            <table class="table table-bordered table-striped">
                                                                                <thead class="text-center bg-warning">
                                                                                    <tr>
                                                                                        <th class="text-white">Operasi</th>
                                                                                        <th class="text-white">Area</th>
                                                                                        <th class="text-white">Sub Area</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="text-center">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <select name="id_departemen" onchange="get_area()" class="form-control">
                                                                                                <option value="">--Pilih Operasi--</option>
                                                                                                <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                                <?php  } ?>
                                                                                            </select>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select name="id_area" id="get_area" class="form-control" onchange="get_sub_area()">
                                                                                                <option value="">--Pilih Area--</option>
                                                                                                <?php foreach ($get_area as $key => $value) { ?>
                                                                                                    <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                                                                <?php  } ?>
                                                                                            </select>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                                                                <option value="">--Pilih Sub Area--</option>
                                                                                            </select>
                                                                                        </td>

                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>

                                                                <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                                                                    <div class="col-md-12">
                                                                        <div style="overflow-x: auto;">
                                                                            <table class="table table-bordered table-striped">
                                                                                <thead class="text-center bg-warning">
                                                                                    <tr>
                                                                                        <th class="text-white">Operasi</th>
                                                                                        <th class="text-white">Area</th>
                                                                                        <th class="text-white">Sub Area</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody class="text-center">
                                                                                    <tr>
                                                                                        <td>
                                                                                            <select name="id_departemen" onchange="get_area()" class="form-control">
                                                                                                <option value="">--Pilih Operasi--</option>
                                                                                                <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                                                <?php  } ?>
                                                                                            </select>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select name="id_area" onchange="get_sub_area()" class="form-control">
                                                                                                <option value="">--Pilih Area--</option>
                                                                                                <?php foreach ($get_area as $key => $value) { ?>
                                                                                                    <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                                                                <?php  } ?>
                                                                                            </select>
                                                                                        </td>
                                                                                        <td>
                                                                                            <select name="id_sub_area" id="get_sub_area" onchange="get_sub_sendiri()" class="form-control">
                                                                                                <option value="">--Pilih Sub Area--</option>
                                                                                            </select>
                                                                                        </td>

                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                <?php } else { ?>
                                                                <?php } ?>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4"></div>
                                                            <div class="col-md-4">
                                                                <form action="<?= base_url('traking_hps/traking_hps/search') ?>" method="post">
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id_area">
                                                                        <input type="hidden" name="id_departemen">
                                                                        <input type="hidden" name="id_sub_area">
                                                                        <div class="form-group">
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_1');
                                                                            $this->db->group_by('tbl_hps_penyedia_1.id_hps_penyedia_1');
                                                                            $filter_uraian_1 = $this->db->get() ?>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_2');
                                                                            $this->db->group_by('tbl_hps_penyedia_2.id_hps_penyedia_2');
                                                                            $filter_uraian_2 = $this->db->get() ?>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_3');
                                                                            $this->db->group_by('tbl_hps_penyedia_3.id_hps_penyedia_3');
                                                                            $filter_uraian_3 = $this->db->get() ?>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_4');
                                                                            $this->db->group_by('tbl_hps_penyedia_4.id_hps_penyedia_4');
                                                                            $filter_uraian_4 = $this->db->get() ?>
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_5');
                                                                            $this->db->group_by('tbl_hps_penyedia_5.id_hps_penyedia_5');
                                                                            $filter_uraian_5 = $this->db->get() ?>
                                                                            <select name="uraian" class="form-control select2">
                                                                                <option value="">--Cari Uraian--</option>
                                                                                <?php foreach ($filter_uraian_1->result_array() as $key => $value) { ?>
                                                                                    <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                                                                                <?php  } ?>
                                                                                <?php foreach ($filter_uraian_2->result_array() as $key => $value) { ?>
                                                                                    <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                                                                                <?php  } ?>
                                                                                <?php foreach ($filter_uraian_3->result_array() as $key => $value) { ?>
                                                                                    <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                                                                                <?php  } ?>
                                                                                <?php foreach ($filter_uraian_4->result_array() as $key => $value) { ?>
                                                                                    <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                                                                                <?php  } ?>
                                                                                <?php foreach ($filter_uraian_5->result_array() as $key => $value) { ?>
                                                                                    <option value="<?= $value['uraian_hps'] ?>"><?= $value['uraian_hps'] ?></option>
                                                                                <?php  } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="col-md-4"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1">

                                            </div>
                                        </div>

                                        <div class="card card-outline card-primary">
                                            <div class="card-header">
                                                <div class="card-tools">
                                                    <!-- <div class="col-md-12">
                                                <label for=""> View Addendum Sampai Addendum</label>
                                                <select name="sampai_add" onchange="Filte_add()" class="form-control">
                                                    <option value="">--Tampilkan Addendum--</option>
                                                    <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                        <option value="<?= $x ?>">Addendum <?= $x ?></option>
                                                    <?php  } ?>
                                                </select>
                                            </div> -->
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <table class="table bg-primary">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-white"><label for="">Uraian</label> </th>
                                                                    <th class="text-white"><label class="mt-1" for="">HPS</label> </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $this->db->select('*');
                                                                $this->db->from('tbl_detail_program_penyedia_jasa');
                                                                $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak', 'left');
                                                                $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
                                                                $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
                                                                $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
                                                                if (($id_departemen_filter)) {
                                                                    $this->db->where('mst_kontrak.id_departemen', $id_departemen_filter);
                                                                } else {
                                                                    $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                                                                }
                                                                if (($id_area_filter)) {
                                                                    $this->db->where('mst_kontrak.id_area', $id_area_filter);
                                                                } else {
                                                                    $this->db->where('mst_kontrak.id_area', $id_area);
                                                                }
                                                                if (($id_sub_area_filter)) {
                                                                    $this->db->where('mst_kontrak.id_sub_area', $id_sub_area_filter);
                                                                } else {
                                                                    $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
                                                                }
                                                                $this->db->group_by('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                $query_tbl_program_penyedia = $this->db->get() ?>
                                                                <?php foreach ($query_tbl_program_penyedia->result_array() as $key => $value_program) { ?>
                                                                    <?php $id_detail_program_penyedia_jasa = $value_program['id_detail_program_penyedia_jasa'] ?>
                                                                    <!-- filter hps dan kontrak 1 -->
                                                                    <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_hps_penyedia_1');
                                                                    $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                                    $this->db->group_by('tbl_hps_penyedia_1.id_hps_penyedia_1');
                                                                    $cek_jika_filter_ada_hps_1 = $this->db->get() ?>
                                                                    <!-- batas filter hps dan kontrak 1 -->
                                                                    <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_hps_penyedia_1');
                                                                    foreach ($cek_jika_filter_ada_hps_1->result_array() as $key => $value_jika_filter_ada_hps_1) {
                                                                        if ($value_jika_filter_ada_hps_1['uraian_hps'] == $uraian_filter) {
                                                                            $this->db->like('tbl_hps_penyedia_1.uraian_hps', $uraian_filter);
                                                                            $this->db->where('tbl_hps_penyedia_1.satuan_hps !=', null);
                                                                        } else {
                                                                        }
                                                                    }
                                                                    $this->db->where('tbl_hps_penyedia_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                                    $this->db->group_by('tbl_hps_penyedia_1.id_hps_penyedia_1');
                                                                    $query_tbl_hps_1 = $this->db->get() ?>
                                                                    <?php foreach ($query_tbl_hps_1->result_array() as $key => $value_hps_1) { ?>
                                                                        <?php $id_hps_penyedia_1 = $value_hps_1['id_hps_penyedia_1'] ?>
                                                                        <?php if ($value_hps_1['uraian_hps'] == $uraian_filter) { ?>
                                                                            <tr>
                                                                                <td><?= $value_hps_1['uraian_hps'] ?></td>
                                                                                <td><?= $value_hps_1['harga_satuan_hps'] ?></td>
                                                                            </tr>
                                                                        <?php  } else { ?>

                                                                        <?php }
                                                                        ?>
                                                                        <!-- filter hps dan kontrak 2 -->
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_2');
                                                                        $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
                                                                        $this->db->group_by('tbl_hps_penyedia_2.id_hps_penyedia_2');
                                                                        $cek_jika_filter_ada_hps_2 = $this->db->get() ?>
                                                                        <!-- batas filter hps dan kontrak 2 -->
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_2');
                                                                        foreach ($cek_jika_filter_ada_hps_2->result_array() as $key => $value_jika_filter_ada_hps_2) {
                                                                            if ($value_jika_filter_ada_hps_2['uraian_hps'] == $uraian_filter) {
                                                                                $this->db->like('tbl_hps_penyedia_2.uraian_hps', $uraian_filter);
                                                                                $this->db->where('tbl_hps_penyedia_2.satuan_hps !=', null);
                                                                            } else {
                                                                            }
                                                                        }
                                                                        $this->db->where('tbl_hps_penyedia_2.id_hps_penyedia_1', $id_hps_penyedia_1);
                                                                        $this->db->group_by('tbl_hps_penyedia_2.id_hps_penyedia_2');
                                                                        $query_tbl_hps_2 = $this->db->get() ?>
                                                                        <?php foreach ($query_tbl_hps_2->result_array() as $key => $value_hps_2) { ?>
                                                                            <?php $id_hps_penyedia_2 = $value_hps_2['id_hps_penyedia_2'] ?>
                                                                            <?php if ($value_hps_2['uraian_hps'] == $uraian_filter) { ?>
                                                                                <tr>
                                                                                    <td><?= $value_hps_2['uraian_hps'] ?></td>
                                                                                    <td><?= $value_hps_2['harga_satuan_hps'] ?></td>
                                                                                </tr>
                                                                            <?php  } else { ?>

                                                                            <?php }
                                                                            ?>
                                                                            <!-- filter hps dan kontrak 3 -->
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_3');
                                                                            $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
                                                                            $this->db->group_by('tbl_hps_penyedia_3.id_hps_penyedia_3');
                                                                            $cek_jika_filter_ada_hps_3 = $this->db->get() ?>
                                                                            <!-- batas filter hps dan kontrak 3 -->
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_3');
                                                                            foreach ($cek_jika_filter_ada_hps_3->result_array() as $key => $value_jika_filter_ada_hps_3) {
                                                                                if ($value_jika_filter_ada_hps_3['uraian_hps'] == $uraian_filter) {
                                                                                    $this->db->like('tbl_hps_penyedia_3.uraian_hps', $uraian_filter);
                                                                                    $this->db->where('tbl_hps_penyedia_3.satuan_hps !=', null);
                                                                                } else {
                                                                                }
                                                                            }
                                                                            $this->db->where('tbl_hps_penyedia_3.id_hps_penyedia_2', $id_hps_penyedia_2);
                                                                            $this->db->group_by('tbl_hps_penyedia_3.id_hps_penyedia_3');
                                                                            $query_tbl_hps_3 = $this->db->get() ?>
                                                                            <?php foreach ($query_tbl_hps_3->result_array() as $key => $value_hps_3) { ?>
                                                                                <?php $id_hps_penyedia_3 = $value_hps_3['id_hps_penyedia_3'] ?>
                                                                                <?php if ($value_hps_3['uraian_hps'] == $uraian_filter) { ?>
                                                                                    <tr>
                                                                                        <td><?= $value_hps_3['uraian_hps'] ?></td>
                                                                                        <td><?= $value_hps_3['harga_satuan_hps'] ?></td>
                                                                                    </tr>
                                                                                <?php  } else { ?>

                                                                                <?php }
                                                                                ?>
                                                                                <!-- filter hps dan kontrak 4 -->
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_hps_penyedia_4');
                                                                                $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
                                                                                $this->db->group_by('tbl_hps_penyedia_4.id_hps_penyedia_4');
                                                                                $cek_jika_filter_ada_hps_4 = $this->db->get() ?>
                                                                                <!-- batas filter hps dan kontrak 4 -->
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_hps_penyedia_4');
                                                                                foreach ($cek_jika_filter_ada_hps_4->result_array() as $key => $value_jika_filter_ada_hps_4) {
                                                                                    if ($value_jika_filter_ada_hps_4['uraian_hps'] == $uraian_filter) {
                                                                                        $this->db->like('tbl_hps_penyedia_4.uraian_hps', $uraian_filter);
                                                                                        $this->db->where('tbl_hps_penyedia_4.satuan_hps !=', null);
                                                                                    } else {
                                                                                    }
                                                                                }
                                                                                $this->db->where('tbl_hps_penyedia_4.id_hps_penyedia_3', $id_hps_penyedia_3);
                                                                                $this->db->group_by('tbl_hps_penyedia_4.id_hps_penyedia_4');
                                                                                $query_tbl_hps_4 = $this->db->get() ?>
                                                                                <?php foreach ($query_tbl_hps_4->result_array() as $key => $value_hps_4) { ?>
                                                                                    <?php $id_hps_penyedia_4 = $value_hps_4['id_hps_penyedia_4'] ?>
                                                                                    <?php if ($value_hps_4['uraian_hps'] == $uraian_filter) { ?>
                                                                                        <tr>
                                                                                            <td><?= $value_hps_4['uraian_hps'] ?></td>
                                                                                            <td><?= $value_hps_4['harga_satuan_hps'] ?></td>
                                                                                        </tr>
                                                                                    <?php  } else { ?>

                                                                                    <?php }
                                                                                    ?>
                                                                                    <!-- filter hps dan kontrak 5 -->
                                                                                    <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_hps_penyedia_5');
                                                                                    $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
                                                                                    $this->db->group_by('tbl_hps_penyedia_5.id_hps_penyedia_5');
                                                                                    $cek_jika_filter_ada_hps_5 = $this->db->get() ?>
                                                                                    <!-- batas filter hps dan kontrak 5 -->
                                                                                    <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_hps_penyedia_5');
                                                                                    foreach ($cek_jika_filter_ada_hps_5->result_array() as $key => $value_jika_filter_ada_hps_5) {
                                                                                        if ($value_jika_filter_ada_hps_5['uraian_hps'] == $uraian_filter) {
                                                                                            $this->db->like('tbl_hps_penyedia_5.uraian_hps', $uraian_filter);
                                                                                            $this->db->where('tbl_hps_penyedia_5.satuan_hps !=', null);
                                                                                        } else {
                                                                                        }
                                                                                    }
                                                                                    $this->db->where('tbl_hps_penyedia_5.id_hps_penyedia_4', $id_hps_penyedia_4);
                                                                                    $this->db->group_by('tbl_hps_penyedia_5.id_hps_penyedia_5');
                                                                                    $query_tbl_hps_5 = $this->db->get() ?>
                                                                                    <?php foreach ($query_tbl_hps_5->result_array() as $key => $value_hps_5) { ?>
                                                                                        <?php $id_hps_penyedia_5 = $value_hps_5['id_hps_penyedia_5'] ?>
                                                                                        <?php if ($value_hps_5['uraian_hps'] == $uraian_filter) { ?>
                                                                                            <tr>
                                                                                                <td><?= $value_hps_5['uraian_hps'] ?></td>
                                                                                                <td><?= $value_hps_5['harga_satuan_hps'] ?></td>
                                                                                            </tr>
                                                                                        <?php  } else { ?>

                                                                                        <?php }
                                                                                        ?>
                                                                                    <?php  } ?>
                                                                                <?php  } ?>
                                                                            <?php  } ?>
                                                                        <?php  } ?>
                                                                    <?php  } ?>
                                                                <?php  } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div style="overflow-x: auto;">
                                                            <table class="table bg-primary">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-white">Departemen</th>
                                                                        <th class="text-white">Area</th>
                                                                        <th class="text-white">Sub Area</th>
                                                                        <th class="text-white">Tahun</th>
                                                                        <th class="text-white">Kontrak Awal</th>
                                                                        <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                                            <th class="text-white">Addendum <?= $x ?></th>
                                                                        <?php  } ?>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $this->db->select('*');
                                                                    $this->db->from('tbl_detail_program_penyedia_jasa');
                                                                    $this->db->join('mst_kontrak', 'tbl_detail_program_penyedia_jasa.id_kontrak = mst_kontrak.id_kontrak', 'left');
                                                                    $this->db->join('mst_departemen', 'mst_kontrak.id_departemen = mst_departemen.id_departemen', 'left');
                                                                    $this->db->join('mst_area', 'mst_kontrak.id_area = mst_area.id_area', 'left');
                                                                    $this->db->join('mst_sub_area', 'mst_kontrak.id_sub_area = mst_sub_area.id_sub_area', 'left');
                                                                    if (($id_departemen_filter)) {
                                                                        $this->db->where('mst_kontrak.id_departemen', $id_departemen_filter);
                                                                    } else {
                                                                        $this->db->where('mst_kontrak.id_departemen', $id_departemen);
                                                                    }
                                                                    if (($id_area_filter)) {
                                                                        $this->db->where('mst_kontrak.id_area', $id_area_filter);
                                                                    } else {
                                                                        $this->db->where('mst_kontrak.id_area', $id_area);
                                                                    }
                                                                    if (($id_sub_area_filter)) {
                                                                        $this->db->where('mst_kontrak.id_sub_area', $id_sub_area_filter);
                                                                    } else {
                                                                        $this->db->where('mst_kontrak.id_sub_area', $id_sub_area);
                                                                    }
                                                                    $this->db->group_by('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa');
                                                                    $query_tbl_program_penyedia = $this->db->get() ?>
                                                                    <?php foreach ($query_tbl_program_penyedia->result_array() as $key => $value_program) { ?>
                                                                        <?php $id_detail_program_penyedia_jasa = $value_program['id_detail_program_penyedia_jasa'] ?>
                                                                        <!-- filter hps dan kontrak 1 -->
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_kontrak_1');
                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                                        $this->db->group_by('tbl_hps_penyedia_kontrak_1.id_hps_penyedia_kontrak_1');
                                                                        $cek_jika_filter_ada_hps_1 = $this->db->get() ?>
                                                                        <!-- batas filter hps dan kontrak 1 -->
                                                                        <?php
                                                                        $this->db->select('*');
                                                                        $this->db->from('tbl_hps_penyedia_kontrak_1');
                                                                        foreach ($cek_jika_filter_ada_hps_1->result_array() as $key => $value_jika_filter_ada_hps_1) {
                                                                            if ($value_jika_filter_ada_hps_1['uraian_hps'] == $uraian_filter) {
                                                                                $this->db->like('tbl_hps_penyedia_kontrak_1.uraian_hps', $uraian_filter);
                                                                                $this->db->where('tbl_hps_penyedia_kontrak_1.satuan_hps !=', null);
                                                                            } else {
                                                                            }
                                                                        }
                                                                        $this->db->where('tbl_hps_penyedia_kontrak_1.id_detail_program_penyedia_jasa', $id_detail_program_penyedia_jasa);
                                                                        $this->db->group_by('tbl_hps_penyedia_kontrak_1.id_hps_penyedia_kontrak_1');
                                                                        $query_tbl_hps_1 = $this->db->get() ?>
                                                                        <?php foreach ($query_tbl_hps_1->result_array() as $key => $value_hps_1) { ?>
                                                                            <?php $id_hps_penyedia_kontrak_1 = $value_hps_1['id_hps_penyedia_kontrak_1'] ?>
                                                                            <?php if ($value_hps_1['uraian_hps'] == $uraian_filter) { ?>
                                                                                <tr>
                                                                                    <td><?= $value_program['nama_departemen'] ?></td>
                                                                                    <td><?= $value_program['nama_area'] ?></td>
                                                                                    <td><?= $value_program['nama_sub_area'] ?></td>
                                                                                    <td><?= $value_program['tahun_anggaran'] ?></td>
                                                                                    <td><?= $value_hps_1['harga_satuan_hps'] ?></td>
                                                                                    <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                                                        <td><?= $value_hps_1['harga_satuan_hps_addendum_' . $x] ?></td>
                                                                                    <?php  } ?>
                                                                                </tr>
                                                                            <?php  } else { ?>

                                                                            <?php }
                                                                            ?>
                                                                            <!-- filter hps dan kontrak 2 -->
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_kontrak_2');
                                                                            $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
                                                                            $this->db->group_by('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_2');
                                                                            $cek_jika_filter_ada_hps_2 = $this->db->get() ?>
                                                                            <!-- batas filter hps dan kontrak 2 -->
                                                                            <?php
                                                                            $this->db->select('*');
                                                                            $this->db->from('tbl_hps_penyedia_kontrak_2');
                                                                            foreach ($cek_jika_filter_ada_hps_2->result_array() as $key => $value_jika_filter_ada_hps_2) {
                                                                                if ($value_jika_filter_ada_hps_2['uraian_hps'] == $uraian_filter) {
                                                                                    $this->db->like('tbl_hps_penyedia_kontrak_2.uraian_hps', $uraian_filter);
                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_2.satuan_hps !=', null);
                                                                                } else {
                                                                                }
                                                                            }
                                                                            $this->db->where('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_1', $id_hps_penyedia_kontrak_1);
                                                                            $this->db->group_by('tbl_hps_penyedia_kontrak_2.id_hps_penyedia_kontrak_2');
                                                                            $query_tbl_hps_2 = $this->db->get() ?>
                                                                            <?php foreach ($query_tbl_hps_2->result_array() as $key => $value_hps_2) { ?>
                                                                                <?php $id_hps_penyedia_kontrak_2 = $value_hps_2['id_hps_penyedia_kontrak_2'] ?>
                                                                                <?php if ($value_hps_2['uraian_hps'] == $uraian_filter) { ?>
                                                                                    <tr>
                                                                                        <td><?= $value_program['nama_departemen'] ?></td>
                                                                                        <td><?= $value_program['nama_area'] ?></td>
                                                                                        <td><?= $value_program['nama_sub_area'] ?></td>
                                                                                        <td><?= $value_program['tahun_anggaran'] ?></td>
                                                                                        <td><?= $value_hps_2['harga_satuan_hps'] ?></td>
                                                                                        <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                                                            <td><?= $value_hps_2['harga_satuan_hps_addendum_' . $x] ?></td>
                                                                                        <?php  } ?>

                                                                                    </tr>
                                                                                <?php  } else { ?>

                                                                                <?php }
                                                                                ?>
                                                                                <!-- filter hps dan kontrak 3 -->
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_hps_penyedia_kontrak_3');
                                                                                $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                                                                                $this->db->group_by('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_3');
                                                                                $cek_jika_filter_ada_hps_3 = $this->db->get() ?>
                                                                                <!-- batas filter hps dan kontrak 3 -->
                                                                                <?php
                                                                                $this->db->select('*');
                                                                                $this->db->from('tbl_hps_penyedia_kontrak_3');
                                                                                foreach ($cek_jika_filter_ada_hps_3->result_array() as $key => $value_jika_filter_ada_hps_3) {
                                                                                    if ($value_jika_filter_ada_hps_3['uraian_hps'] == $uraian_filter) {
                                                                                        $this->db->like('tbl_hps_penyedia_kontrak_3.uraian_hps', $uraian_filter);
                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_3.satuan_hps !=', null);
                                                                                    } else {
                                                                                    }
                                                                                }
                                                                                $this->db->where('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_2', $id_hps_penyedia_kontrak_2);
                                                                                $this->db->group_by('tbl_hps_penyedia_kontrak_3.id_hps_penyedia_kontrak_3');
                                                                                $query_tbl_hps_3 = $this->db->get() ?>
                                                                                <?php foreach ($query_tbl_hps_3->result_array() as $key => $value_hps_3) { ?>
                                                                                    <?php $id_hps_penyedia_kontrak_3 = $value_hps_3['id_hps_penyedia_kontrak_3'] ?>
                                                                                    <?php if ($value_hps_3['uraian_hps'] == $uraian_filter) { ?>
                                                                                        <tr>
                                                                                            <td><?= $value_program['nama_departemen'] ?></td>
                                                                                            <td><?= $value_program['nama_area'] ?></td>
                                                                                            <td><?= $value_program['nama_sub_area'] ?></td>
                                                                                            <td><?= $value_program['tahun_anggaran'] ?></td>
                                                                                            <td><?= $value_hps_3['harga_satuan_hps'] ?></td>
                                                                                            <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                                                                <td><?= $value_hps_3['harga_satuan_hps_addendum_' . $x] ?></td>
                                                                                            <?php  } ?>

                                                                                        </tr>
                                                                                    <?php  } else { ?>

                                                                                    <?php }
                                                                                    ?>
                                                                                    <!-- filter hps dan kontrak 4 -->
                                                                                    <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_hps_penyedia_kontrak_4');
                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                                                                                    $this->db->group_by('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_4');
                                                                                    $cek_jika_filter_ada_hps_4 = $this->db->get() ?>
                                                                                    <!-- batas filter hps dan kontrak 4 -->
                                                                                    <?php
                                                                                    $this->db->select('*');
                                                                                    $this->db->from('tbl_hps_penyedia_kontrak_4');
                                                                                    foreach ($cek_jika_filter_ada_hps_4->result_array() as $key => $value_jika_filter_ada_hps_4) {
                                                                                        if ($value_jika_filter_ada_hps_4['uraian_hps'] == $uraian_filter) {
                                                                                            $this->db->like('tbl_hps_penyedia_kontrak_4.uraian_hps', $uraian_filter);
                                                                                            $this->db->where('tbl_hps_penyedia_kontrak_4.satuan_hps !=', null);
                                                                                        } else {
                                                                                        }
                                                                                    }
                                                                                    $this->db->where('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_3', $id_hps_penyedia_kontrak_3);
                                                                                    $this->db->group_by('tbl_hps_penyedia_kontrak_4.id_hps_penyedia_kontrak_4');
                                                                                    $query_tbl_hps_4 = $this->db->get() ?>
                                                                                    <?php foreach ($query_tbl_hps_4->result_array() as $key => $value_hps_4) { ?>
                                                                                        <?php $id_hps_penyedia_kontrak_4 = $value_hps_4['id_hps_penyedia_kontrak_4'] ?>
                                                                                        <?php if ($value_hps_4['uraian_hps'] == $uraian_filter) { ?>
                                                                                            <tr>
                                                                                                <td><?= $value_program['nama_departemen'] ?></td>
                                                                                                <td><?= $value_program['nama_area'] ?></td>
                                                                                                <td><?= $value_program['nama_sub_area'] ?></td>
                                                                                                <td><?= $value_program['tahun_anggaran'] ?></td>
                                                                                                <td><?= $value_hps_4['harga_satuan_hps'] ?></td>
                                                                                                <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                                                                    <td><?= $value_hps_4['harga_satuan_hps_addendum_' . $x] ?></td>
                                                                                                <?php  } ?>

                                                                                            </tr>
                                                                                        <?php  } else { ?>

                                                                                        <?php }
                                                                                        ?>
                                                                                        <!-- filter hps dan kontrak 5 -->
                                                                                        <?php
                                                                                        $this->db->select('*');
                                                                                        $this->db->from('tbl_hps_penyedia_kontrak_5');
                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                                                                                        $this->db->group_by('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_5');
                                                                                        $cek_jika_filter_ada_hps_5 = $this->db->get() ?>
                                                                                        <!-- batas filter hps dan kontrak 5 -->
                                                                                        <?php
                                                                                        $this->db->select('*');
                                                                                        $this->db->from('tbl_hps_penyedia_kontrak_5');
                                                                                        foreach ($cek_jika_filter_ada_hps_5->result_array() as $key => $value_jika_filter_ada_hps_5) {
                                                                                            if ($value_jika_filter_ada_hps_5['uraian_hps'] == $uraian_filter) {
                                                                                                $this->db->like('tbl_hps_penyedia_kontrak_5.uraian_hps', $uraian_filter);
                                                                                                $this->db->where('tbl_hps_penyedia_kontrak_5.satuan_hps !=', null);
                                                                                            } else {
                                                                                            }
                                                                                        }
                                                                                        $this->db->where('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_4', $id_hps_penyedia_kontrak_4);
                                                                                        $this->db->group_by('tbl_hps_penyedia_kontrak_5.id_hps_penyedia_kontrak_5');
                                                                                        $query_tbl_hps_5 = $this->db->get() ?>
                                                                                        <?php foreach ($query_tbl_hps_5->result_array() as $key => $value_hps_5) { ?>
                                                                                            <?php $id_hps_penyedia_kontrak_5 = $value_hps_5['id_hps_penyedia_kontrak_5'] ?>
                                                                                            <?php if ($value_hps_5['uraian_hps'] == $uraian_filter) { ?>
                                                                                                <tr>
                                                                                                    <td><?= $value_program['nama_departemen'] ?></td>
                                                                                                    <td><?= $value_program['nama_area'] ?></td>
                                                                                                    <td><?= $value_program['nama_sub_area'] ?></td>
                                                                                                    <td><?= $value_program['tahun_anggaran'] ?></td>
                                                                                                    <td><?= $value_hps_5['harga_satuan_hps'] ?></td>
                                                                                                    <?php for ($x = 1; $x <= 30; $x++) { ?>
                                                                                                        <td><?= $value_hps_5['harga_satuan_hps_addendum_' . $x] ?></td>
                                                                                                    <?php  } ?>

                                                                                                </tr>
                                                                                            <?php  } else { ?>

                                                                                            <?php }
                                                                                            ?>
                                                                                        <?php  } ?>
                                                                                    <?php  } ?>
                                                                                <?php  } ?>
                                                                            <?php  } ?>
                                                                        <?php  } ?>
                                                                    <?php  } ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- ./card-body -->
                                                <!-- /.card-footer -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <!-- /.row -->
                    </div>
                    <!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>

    </section>
</div>