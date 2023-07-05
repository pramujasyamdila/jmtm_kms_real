<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Rangkuman Berkas</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Rangkuman Berkas</a></div>
            </div>
        </div>
        <input type="hidden" name="tahun_filter">
        <div class="section-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">REKAPITULASI RANGKUMAN BERKAS <?= $this->session->userdata('nama_departemen'); ?>-<?= $this->session->userdata('nama_sub_area') ?></h5>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card card-primary">
                                <div class="card-header text-center">
                                    <h6> <i class="fa fa-search-plus" aria-hidden="true"></i> FILTER AREA BERKAS</h6>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('rekapitulasi/search') ?>" method="post">
                                        <div class="row">
                                            <?php if ($id_departemen == 4) { ?>
                                                <div class="col-md-10">
                                                    <table class="table table-bordered table-striped">
                                                        <thead class="text-center">
                                                            <tr>
                                                                <th>Osperasi</th>
                                                                <th>Area</th>
                                                                <th>Sub Area</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-center">
                                                            <tr>
                                                                <td>
                                                                    <select name="id_departemen" onchange="get_area1()" class="form-control id_departemen">
                                                                        <option value="">--Pilih Operasi--</option>
                                                                        <?php foreach ($get_departemen_all as $key => $value) { ?>
                                                                            <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                        <?php  } ?>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="id_area" id="get_area" onchange="get_sub_area1()" class="form-control id_area">
                                                                        <option value="">--Pilih Area--</option>
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select name="id_sub_area" id="get_sub_area" class="form-control id_sub_area">
                                                                        <option value="">--Pilih Sub Area--</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- <div class="table" id="insert-lokasi"></div> -->
                                                </div>
                                            <?php } else { ?>
                                                <?php if ($id_departemen && $id_area == 0 && $id_sub_area == 0) { ?>
                                                    <div class="col-md-10">
                                                        <table class="table table-bordered table-striped">
                                                            <thead class="text-center">
                                                                <tr>
                                                                    <th>Operasi</th>
                                                                    <th>Area</th>
                                                                    <th>Sub Area</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>
                                                                        <select name="id_departemen" onchange="get_area2()" class="form-control">
                                                                            <option value="">--Pilih Area--</option>
                                                                            <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <select name="id_area" id="get_area" onchange="get_sub_area2()" class="form-control">
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

                                                <?php  } else if ($id_departemen && $id_area && $id_sub_area == 0) { ?>
                                                    <div class="col-md-10">
                                                        <table class="table table-bordered table-striped">
                                                            <thead class="text-center">
                                                                <tr>
                                                                    <th>Operasi</th>
                                                                    <th>Area</th>
                                                                    <th>Sub Area</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>
                                                                        <select name="id_departemen" class="form-control">
                                                                            <option value="">--Pilih Operasi--</option>
                                                                            <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <select name="id_area" class="form-control" onchange="get_sub_area3()">
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
                                                        <!-- <div class="table" id="insert-lokasi"></div> -->
                                                    </div>

                                                <?php  } else if ($id_departemen && $id_area && $id_sub_area) { ?>
                                                    <div class="col-md-10">
                                                        <table class="table table-bordered table-striped">
                                                            <thead class="text-center bg-warning text-white">
                                                                <tr>
                                                                    <th class="text-white">Operasi</th>
                                                                    <th class="text-white">Area</th>
                                                                    <th class="text-white">Sub Area</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="text-center">
                                                                <tr>
                                                                    <td>
                                                                        <select name="id_departemen" class="form-control">
                                                                            <option value="<?= $this->session->userdata('id_departemen') ?>"><?= $this->session->userdata('nama_departemen') ?></option>
                                                                            <?php foreach ($get_departemen as $key => $value) { ?>
                                                                                <option value="<?= $value['id_departemen'] ?>"><?= $value['nama_departemen'] ?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <select name="id_area" class="form-control">
                                                                            <option value="<?= $this->session->userdata('id_area') ?>"><?= $this->session->userdata('nama_area') ?></option>
                                                                            <?php foreach ($get_area as $key => $value) { ?>
                                                                                <option value="<?= $value['id_area'] ?>"><?= $value['nama_area'] ?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                    <td>
                                                                        <select name="id_sub_area" id="get_sub_area" class="form-control">
                                                                            <option value="<?= $this->session->userdata('id_sub_area') ?>"><?= $this->session->userdata('nama_sub_area') ?></option>
                                                                            <?php foreach ($get_sub_area as $key => $value) { ?>
                                                                                <option value="<?= $value['id_sub_area'] ?>"><?= $value['nama_sub_area'] ?></option>
                                                                            <?php  } ?>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <!-- <div class="table" id="insert-lokasi"></div> -->
                                                    </div>
                                                <?php } else { ?>
                                                <?php } ?>
                                            <?php } ?>
                                            <div class="col-md-2 mt-5">
                                                <button type="submit" class="btn btn-sm btn-outline-primary btn-block"> <i class="fa fa-search-plus" aria-hidden="true"></i> Filter Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        RESULT STATUS BERKAS
                                    </div>
                                    <div class="card-body">
                                        <!-- BERKAS VENDOR -->
                                        <div class="card card-primary text-whitr">
                                            <div class="card-header">
                                                BERKAS VENDOR
                                            </div>
                                            <div class="card-body">
                                                <table class="table" style="font-size: 10px;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>SUB AREA</th>
                                                            <th>PENYEDIA</th>
                                                            <th>MC</th>
                                                            <th>Uraian</th>
                                                            <th>PEKERJAAN</th>
                                                            <th>Nominal Taggihan</th>
                                                            <th>Tanggal</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($get_program as $key => $value) { ?>
                                                            <?php
                                                            $data_mc = $this->Data_kontrak_model->get_mc_by_id($value['id_detail_program_penyedia_jasa']);
                                                            
                                                           ?>
                                                            <?php foreach ($data_mc as $key => $value2) { ?>
                                                                <?php if ($value2['pic'] == 'Vendor') { ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $i++; ?>

                                                                    </td>
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
                                                                <?php  } else { ?>
                                                                   
                                                                <?php } ?>
                                                            
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
                                                <table class="table" style="font-size: 10px;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>SUB AREA</th>
                                                            <th>PENYEDIA</th>
                                                            <th>MC</th>
                                                            <th>Uraian</th>
                                                            <th>PEKERJAAN</th>
                                                            <th>Nominal Taggihan</th>
                                                            <th>Tanggal</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($get_program as $key => $value) { ?>
                                                            <?php
                                                            $data_mc_area = $this->Data_kontrak_model->get_mc_by_id($value['id_detail_program_penyedia_jasa']);
                                                            ?>
                                                            <?php foreach ($data_mc_area as $key => $value2) { ?>
                                                                <?php if ($value2['pic'] == 'Area') { ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $i++; ?>

                                                                    </td>
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
                                                                <?php  } else { ?>
                                                                   
                                                                <?php } ?>
                                                            
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
                                                <table class="table" style="font-size: 10px;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>SUB AREA</th>
                                                            <th>PENYEDIA</th>
                                                            <th>MC</th>
                                                            <th>Uraian</th>
                                                            <th>PEKERJAAN</th>
                                                            <th>Nominal Taggihan</th>
                                                            <th>Tanggal</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($get_program as $key => $value) { ?>
                                                            <?php
                                                            $data_mc_pusat = $this->Data_kontrak_model->get_mc_by_id($value['id_detail_program_penyedia_jasa']);
                                                            ?>
                                                             <?php foreach ($data_mc_pusat as $key => $value2) { ?>
                                                                <?php if ($value2['pic'] == 'Pusat') { ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $i++; ?>

                                                                    </td>
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
                                                                <?php  } else { ?>
                                                                   
                                                                <?php } ?>
                                                            
                                                            <?php } ?>
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
                                                <table class="table" style="font-size: 10px;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>SUB AREA</th>
                                                            <th>PENYEDIA</th>
                                                            <th>MC</th>
                                                            <th>Uraian</th>
                                                            <th>PEKERJAAN</th>
                                                            <th>Nominal Taggihan</th>
                                                            <th>Tanggal</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($get_program as $key => $value) { ?>
                                                            <?php
                                                            $data_mc_finance = $this->Data_kontrak_model->get_mc_by_id($value['id_detail_program_penyedia_jasa']);
                                                            ?>
                                                            <?php foreach ($data_mc_finance as $key => $value2) { ?>
                                                                <?php if ($value2['uraian'] == 'Diterima Finance') { ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $i++; ?>

                                                                    </td>
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
                                                                <?php  } else { ?>
                                                                   
                                                                <?php } ?>
                                                            
                                                            <?php } ?>
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
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>SUB AREA</th>
                                                            <th>PENYEDIA</th>
                                                            <th>MC</th>
                                                            <th>Uraian</th>
                                                            <th>PEKERJAAN</th>
                                                            <th>Nominal Taggihan</th>
                                                            <th>Tanggal</th>
                                                            <th>Keterangan</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $i = 1;
                                                        foreach ($get_program as $key => $value) { ?>
                                                            <?php
                                                            $data_mc_finance2 = $this->Data_kontrak_model->get_mc_by_id5($value['id_detail_program_penyedia_jasa']);
                                                            ?>
                                                            <?php foreach ($data_mc_finance2 as $key => $value2) { ?>
                                                                <?php if ($value2['uraian'] == 'Pencairan') { ?>
                                                                <tr>
                                                                    <td>
                                                                        <?= $i++; ?>

                                                                    </td>
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
                                                                <?php  } else { ?>
                                                                   
                                                                <?php } ?>
                                                            
                                                            <?php } ?>
                                                        <?php  } ?>
                                                    </tbody>
                                                </table>
                                            </div>
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
                </div>
            </div>
        </div>
        <!--/. container-fluid -->
    </section>
</div>
<!-- Modal -->