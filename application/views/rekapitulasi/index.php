<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : <b class="card-title">REKAPITULASI RANGKUMAN BERKAS <?= $this->session->userdata('nama_departemen'); ?>-<?= $this->session->userdata('nama_sub_area') ?></b></b>
        </nav>


        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - REKAPITULASI BERKAS </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk melihat Rekapitulasi Berkas Tagihan Penyedia Jasa yang masuk ke dalam Aplikasi Kontrak Manajemen

            </h6>
        </div>
        <div class="card">
            <form action="<?= base_url('rekapitulasi/search') ?>" method="post">
                <div class="row">
                    <?php if ($id_departemen == 4) { ?>
                        <div class="col-md-6">
                            <select name="id_departemen" onchange="get_area1()" class="form-control id_departemen">
                                <option value="">--Pilih Operasi--</option>
                                <?php foreach ($get_departemen_all as $key => $value) { ?>
                                    <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                <?php  } ?>
                            </select>
                            <select name="id_area" id="get_area" onchange="get_sub_area1()" class="form-control id_area">
                                <option value="">--Pilih Area--</option>
                            </select>
                        </div>
                        <div class="col-md-6">

                            <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                <option value="">--Pilih Sub Area--</option>
                            </select>
                            <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                        </div>

                    <?php } else { ?>
                        <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                            <div class="col-md-6">
                                <select name="id_departemen" onchange="get_area2()" class="form-control">
                                    <option value="">--Pilih Area--</option>
                                    <?php foreach ($get_departemen as $key => $value) { ?>
                                        <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                    <?php  } ?>
                                </select>
                                <select name="id_area" id="get_area" onchange="get_sub_area2()" class="form-control">
                                    <option value="">--Pilih Area--</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="id_sub_area" id="get_sub_area" class="form-control">
                                    <option value="">--Pilih Sub Area--</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                            </div>
                        <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                            <div class="col-md-6">
                                <select name="id_departemen" class="form-control">
                                    <option value="">--Pilih Operasi--</option>
                                    <?php foreach ($get_departemen as $key => $value) { ?>
                                        <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                    <?php  } ?>
                                </select>
                                <select name="id_area" class="form-control" onchange="get_sub_area3()">
                                    <option value="">--Pilih Area--</option>
                                    <?php foreach ($get_area as $key => $value) { ?>
                                        <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="id_sub_area" id="get_sub_area" class="form-control">
                                    <option value="">--Pilih Sub Area--</option>
                                </select>
                                <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                            </div>


                        <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                            <div class="col-md-6">
                                <select name="id_departemen" class="form-control">
                                    <option value="<?= $this->session->userdata('id_departemen') ?>"><?= $this->session->userdata('nama_departemen') ?></option>
                                    <?php foreach ($get_departemen as $key => $value) { ?>
                                        <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                    <?php  } ?>
                                </select>
                                <select name="id_area" class="form-control">
                                    <option value="<?= $this->session->userdata('id_area') ?>"><?= $this->session->userdata('nama_area') ?></option>
                                    <?php foreach ($get_area as $key => $value) { ?>
                                        <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="id_sub_area" id="get_sub_area" class="form-control">
                                    <option value="<?= $this->session->userdata('id_sub_area') ?>"><?= $this->session->userdata('nama_sub_area') ?></option>
                                    <?php foreach ($get_sub_area as $key => $value) { ?>
                                        <option value="<?= $value['id_sub_area'] ?>"><?= $value['nama_sub_area'] ?></option>
                                    <?php  } ?>
                                </select>
                                <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                            </div>


                        <?php } else { ?>
                        <?php } ?>
                    <?php } ?>
                </div>
            </form>
        </div>

        <div class="card" style="margin-top: 20px; padding: 20px;margin-top:-20px;font-family: 'Poppins', sans-serif;">
            <center>
                <div class="row" style="margin-left: 90px;">
                    <div class="col-md-2">
                        <a class="btn text-white" style="width: 150px;height:50px;font-size:20px;background-color: #302B63;">VENDOR</a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn text-white" style="width: 150px;height:50px;font-size:20px;background-color: #302B63">AREA</a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn text-white" style="width: 150px;height:50px;font-size:20px;background-color: #302B63">PUSAT</a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn text-white" style="width: 150px;height:50px;font-size:20px;background-color: #302B63">FINANCE</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn text-white" style="height:50px;font-size:20px;background-color: #302B63">FINANCE PENCAIRAN</a>
                    </div>
                </div>
                <br>
                <div class="row" style="margin-left: 90px;">
                    <div class="col-md-2">
                        <a class="btn text-white bg-danger" style="width: 150px;height:50px;font-size:20px;">
                            0
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn text-white bg-warning" style="width: 150px;height:50px;font-size:20px;">
                            0
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn text-white bg-success" style="width: 150px;height:50px;font-size:20px;">
                            0
                        </a>
                    </div>
                    <div class="col-md-2">
                        <a class="btn text-white bg-success" style="width: 150px;height:50px;font-size:20px;">0</a>
                    </div>
                    <div class=" col-md-3">
                        <a class="btn text-white bg-success" style="width: 250px;height:50px;font-size:20px;">0</a>
                    </div>
                </div>
            </center>
        </div>

        <input type="hidden" name="tahun_filter">
        <div class="section-body" style="margin-top:-20px">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">


                            <!-- BERKAS VENDOR -->
                            <div class="card card-primary text-whitr">
                                <div class="card-header">
                                    BERKAS VENDOR
                                </div>
                                <div class="card-body">
                                    <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase; margin-top: -10px">
                                        <thead>
                                            <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                                <th class="text-white">No</th>
                                                <th class="text-white">SUB AREA</th>
                                                <th class="text-white">PENYEDIA</th>
                                                <th class="text-white">MC</th>
                                                <th class="text-white">Uraian</th>
                                                <th class="text-white">PEKERJAAN</th>
                                                <th class="text-white">Nominal Taggihan</th>
                                                <th class="text-white">Tanggal</th>
                                                <th class="text-white">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($get_program as $key => $value) { ?>
                                                <?php
                                                $data_mc = $this->Data_kontrak_model->get_mc_by_id($value['id_detail_program_penyedia_jasa']);
                                                ?>
                                                <?php foreach ($data_mc as $key => $value2) { ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $value['nama_sub_area'] ?></td>
                                                        <td><?= $value['nama_penyedia'] ?></td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= $value2['no_mc'] ?>
                                                            <?php } else { ?>
                                                                Tidak ada MC
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td><?= $value2['uraian'] ?></td>
                                                        <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>

                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                Rp. <?= number_format($value2['setelah_ppn'], 2, ',', '.');  ?>
                                                            <?php } else { ?>
                                                                Tidak ada Tagihan
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= date('d-m-Y', strtotime($value2['tanggal_rapot'])) ?>
                                                            <?php } else { ?>
                                                                Belum Ada Berkas
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?php if ($value2['keterangan_traking'] != NULL) { ?>
                                                                    <?= $value2['keterangan_traking'] ?>
                                                                <?php  } else { ?>
                                                                    Tidak Ada Keterangan Revisi
                                                                <?php } ?>

                                                            <?php } else { ?>
                                                                Tidak Ada Keterangan Revisi
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- BERKAS AREA -->
                            <div class="card card-primary text-whitr">
                                <div class="card-header">
                                    BERKAS AREA
                                </div>
                                <div class="card-body">
                                    <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase; margin-top: -10px">
                                        <thead>
                                            <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                                <th class="text-white">No</th>
                                                <th class="text-white">SUB AREA</th>
                                                <th class="text-white">PENYEDIA</th>
                                                <th class="text-white">MC</th>
                                                <th class="text-white">Uraian</th>
                                                <th class="text-white">PEKERJAAN</th>
                                                <th class="text-white">Nominal Taggihan</th>
                                                <th class="text-white">Tanggal</th>
                                                <th class="text-white">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($get_program as $key => $value) { ?>
                                                <?php
                                                $data_mc_area = $this->Data_kontrak_model->get_mc_by_id2($value['id_detail_program_penyedia_jasa']);
                                                ?>
                                                <?php foreach ($data_mc_area as $key => $value2) { ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $value['nama_sub_area'] ?></td>
                                                        <td><?= $value['nama_penyedia'] ?></td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= $value2['no_mc'] ?>
                                                            <?php } else { ?>
                                                                Tidak ada MC
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td><?= $value2['uraian'] ?></td>
                                                        <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                Rp. <?= number_format($value2['setelah_ppn'], 2, ',', '.');  ?>
                                                            <?php } else { ?>
                                                                Tidak ada Tagihan
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= date('d-m-Y', strtotime($value2['tanggal_rapot'])) ?>
                                                            <?php } else { ?>
                                                                Belum Ada Berkas
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?php if ($value2['keterangan_traking'] != NULL) { ?>
                                                                    <?= $value2['keterangan_traking'] ?>
                                                                <?php  } else { ?>
                                                                    Tidak Ada Keterangan Revisi
                                                                <?php } ?>

                                                            <?php } else { ?>
                                                                Tidak Ada Keterangan Revisi
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- BERKAS PUSAT -->
                            <div class="card card-primary text-whitr">
                                <div class="card-header">
                                    BERKAS PUSAT
                                </div>
                                <div class="card-body">
                                    <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase; margin-top: -10px">
                                        <thead>
                                            <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                                <th class="text-white">No</th>
                                                <th class="text-white">SUB AREA</th>
                                                <th class="text-white">PENYEDIA</th>
                                                <th class="text-white">MC</th>
                                                <th class="text-white">Uraian</th>
                                                <th class="text-white">PEKERJAAN</th>
                                                <th class="text-white">Nominal Taggihan</th>
                                                <th class="text-white">Tanggal</th>
                                                <th class="text-white">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($get_program as $key => $value) { ?>
                                                <?php
                                                $data_mc_pusat = $this->Data_kontrak_model->get_mc_by_id3($value['id_detail_program_penyedia_jasa']);
                                                ?>
                                                <?php foreach ($data_mc_pusat as $key => $value2) { ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $value['nama_sub_area'] ?></td>
                                                        <td><?= $value['nama_penyedia'] ?></td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= $value2['no_mc'] ?>
                                                            <?php } else { ?>
                                                                Tidak ada MC
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td><?= $value2['uraian'] ?></td>
                                                        <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>

                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                Rp. <?= number_format($value2['setelah_ppn'], 2, ',', '.');  ?>
                                                            <?php } else { ?>
                                                                Tidak ada Tagihan
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= date('d-m-Y', strtotime($value2['tanggal_rapot'])) ?>
                                                            <?php } else { ?>
                                                                Belum Ada Berkas
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= $value2['keterangan_traking'] ?>
                                                            <?php } else { ?>
                                                                Tidak Ada Keterangan Revisi
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php }  ?>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- BERKAS FINANCE -->
                            <div class="card card-primary text-whitr">
                                <div class="card-header">
                                    BERKAS FINANCE
                                </div>
                                <div class="card-body">
                                    <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase; margin-top: -10px">
                                        <thead>
                                            <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                                <th class="text-white">No</th>
                                                <th class="text-white">SUB AREA</th>
                                                <th class="text-white">PENYEDIA</th>
                                                <th class="text-white">MC</th>
                                                <th class="text-white">Uraian</th>
                                                <th class="text-white">PEKERJAAN</th>
                                                <th class="text-white">Nominal Taggihan</th>
                                                <th class="text-white">Tanggal</th>
                                                <th class="text-white">Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            foreach ($get_program as $key => $value) { ?>
                                                <?php
                                                $data_mc_pusat = $this->Data_kontrak_model->get_mc_by_id4($value['id_detail_program_penyedia_jasa']);
                                                ?>
                                                <?php foreach ($data_mc_pusat as $key => $value2) { ?>
                                                    <tr>
                                                        <td><?= $i++ ?></td>
                                                        <td><?= $value['nama_sub_area'] ?></td>
                                                        <td><?= $value['nama_penyedia'] ?></td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= $value2['no_mc'] ?>
                                                            <?php } else { ?>
                                                                Tidak ada MC
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td><?= $value2['uraian'] ?></td>
                                                        <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                Rp. <?= number_format($value2['setelah_ppn'], 2, ',', '.');  ?>
                                                            <?php } else { ?>
                                                                Tidak ada Tagihan
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= date('d-m-Y', strtotime($value2['tanggal_rapot'])) ?>
                                                            <?php } else { ?>
                                                                Belum Ada Berkas
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($value2) { ?>
                                                                <?= $value2['keterangan_traking'] ?>
                                                            <?php } else { ?>
                                                                Tidak Ada Keterangan Revisi
                                                            <?php    }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php }  ?>
                                            <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <!-- BERKAS FINANCE PENCAIRAN -->
                            <div class="card card-primary text-whitr">
                                <div class="card-header">
                                    BERKAS FINANCE PENCAIRAN
                                </div>
                                <div class="card-body">
                                    <table class="table" style="font-size: 10px;">
                                        <table class="table" style="font-family: RNSSanz-Black;text-transform: uppercase; margin-top: -10px">
                                            <thead>
                                                <tr style="font-size: 13px; height:10px; background-color: #193B53;">
                                                    <th class="text-white">No</th>
                                                    <th class="text-white">SUB AREA</th>
                                                    <th class="text-white">PENYEDIA</th>
                                                    <th class="text-white">MC</th>
                                                    <th class="text-white">Uraian</th>
                                                    <th class="text-white">PEKERJAAN</th>
                                                    <th class="text-white">Nominal Taggihan</th>
                                                    <th class="text-white">Tanggal</th>
                                                    <th class="text-white">Keterangan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1;
                                                foreach ($get_program as $key => $value) { ?>
                                                    <?php
                                                    $data_mc_pusat = $this->Data_kontrak_model->get_mc_by_id5($value['id_detail_program_penyedia_jasa']);
                                                    ?>
                                                    <?php foreach ($data_mc_pusat as $key => $value2) { ?>
                                                        <tr>
                                                            <td><?= $i++ ?></td>
                                                            <td><?= $value['nama_sub_area'] ?></td>
                                                            <td><?= $value['nama_penyedia'] ?></td>
                                                            <td>
                                                                <?php if ($value2) { ?>
                                                                    <?= $value2['no_mc'] ?>
                                                                <?php } else { ?>
                                                                    Tidak ada MC
                                                                <?php    }
                                                                ?>
                                                            </td>
                                                            <td><?= $value2['uraian'] ?></td>
                                                            <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                                            <td>
                                                                <?php if ($value2) { ?>
                                                                    Rp. <?= number_format($value2['setelah_ppn'], 2, ',', '.');  ?>
                                                                <?php } else { ?>
                                                                    Tidak ada Tagihan
                                                                <?php    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($value2) { ?>
                                                                    <?= date('d-m-Y', strtotime($value2['tanggal_rapot'])) ?>
                                                                <?php } else { ?>
                                                                    Belum Ada Berkas
                                                                <?php    }
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <?php if ($value2) { ?>
                                                                    <?= $value2['keterangan_traking'] ?>
                                                                <?php } else { ?>
                                                                    Tidak Ada Keterangan Revisi
                                                                <?php    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                    <?php }  ?>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                </div>
                            </div>




                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- Main row -->
                        <!-- /.row -->
                    </div>
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
</div>
<!-- Modal -->