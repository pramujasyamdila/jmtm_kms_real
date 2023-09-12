<div class="main-content">
    <div class="section">

        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : Checklist Dan To Do List</b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - DATA PENYEDIA JASA </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk melihat Analisis Data Penyedia Jasa yang masuk ke dalam Aplikasi Kontrak Manajemen

            </h6>

        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px;">

            <div class="row" style="margin-left:50px; margin-right:50px;margin-top: 20px; ">

                <div class="col-md-6">
                    <h4 style="font-family: 'Poppins', sans-serif;"><b> JUMLAH TOTAL PEKERJAAN</b></h4>
                    <div class="card bg-success" style="border-radius:10px;padding:50px">
                        <center>
                            <h1><i class="fa fa-tasks"></i> <?= $count_pekerjaan ?> </h1>
                        </center>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4 style="font-family: 'Poppins', sans-serif;"><b> JUMLAH TOTAL PENYEDIA JASA </b></h4>
                    <div class="card bg-success" style="border-radius:10px;padding:50px"">
                    <center>
                            <h1><i class=" fa fa-users"></i> <?= $count_pekerjaan ?></h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px;">

            <div class="row" style="margin-left:50px; margin-right:50px;margin-top: 20px; ">
                <h4 style="font-family: 'Poppins', sans-serif;"><b> 10 PENYEDIA JASA DENGAN NILAI KONTRAK TERBESAR</b></h4>

            </div>
            <div class="container-fluid">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penyedia Jasa</th>
                            <th>Total Kontrak / Addendum Terupdate Penyedia Jasa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_pekerjaan as $key => $value) { ?>
                            <?php
                            $this->db->select('*');
                            $this->db->from('tbl_hps_penyedia_kontrak_addendum');
                            $this->db->where('tbl_hps_penyedia_kontrak_addendum.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                            $this->db->limit(1);
                            $this->db->order_by('no_addendum', 'DESC');
                            $row_addendum = $this->db->get();
                            $danang = $row_addendum->row_array();
                            ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_penyedia'] ?></td>
                                <?php if ($value['total_kontrak_addendum_' . $danang['no_addendum']] == NULL) { ?>
                                    <td>Rp.0</td>
                                <?php   } else { ?>
                                    <td><?= "Rp " . number_format($value['total_kontrak_addendum_' . $danang['no_addendum']], 2, ',', '.') ?></td>
                                <?php  } ?>
                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<!-- Modal -->