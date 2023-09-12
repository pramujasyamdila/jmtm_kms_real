<div class="main-content">
    <div class="section">

        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : Checklist Dan To Do List</b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 1 - CHECKLIST DAN TO DO LIST </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk melihat aktivitas yang telah dikerjakan dan belum di kerjakan dalam Aplikasi Kontrak Manajemen
            </h6>

        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 1 - DOKUMEN KONTRAK MANAJEMEN </b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-4">
                    <div class="card bg-success" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">Done</h2>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m1_dok_selesai ?></h1>
                                    </center>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">On Progres</h2>
                                </center>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m1_dok_progres2 ?></h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="javascirpt:;" class="btn btn-primary" data-toggle="modal" data-target="#modal_m1" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 2 - DOKUMEN PRA PENGADAAN </b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-4">
                    <div class="card bg-success" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">Done</h2>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m2_dok_selesai ?></h1>
                                    </center>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">On Progres</h2>
                                </center>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m2_dok_progres ?></h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" class="btn btn-xl btn-primary" data-toggle="modal" data-target="#modal_m2" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 2 - DOKUMEN PASCA PENGADAAN </b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-4">
                    <div class="card bg-success" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">Done</h2>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m2_dok_selesai_pasca_final  ?></h1>
                                    </center>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">On Progres</h2>
                                </center>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m2_final_pasca ?></h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" data-toggle="modal" data-target="#modal_m2_pasca" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 3 - DOKUMEN TAGIHAN </b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-4">
                    <div class="card bg-success" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">Done</h2>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1>0</h1>
                                    </center>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">On Progres</h2>
                                </center>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1>19</h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="javascript:;" data-toggle="modal" data-target="#modal_m3" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: 20px; padding: 20px; margin-top:-20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> PETUNJUK UMUM </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">
                1. Dokumen Kontrak Manajemen dihitung melalui berkas Kontrak Manajemen yang sudah di upload ke dalam sistem
            </h6>
            <h6 style="font-family: 'Poppins', sans-serif;">
                2. Dokumen Pra Pengadaan dihitung melalui berkas Pra Pengadaan (Ijin Prinsip, HPS, Nota Dinas) yang sudah di upload ke dalam sistem
            </h6>
            <h6 style="font-family: 'Poppins', sans-serif;">
                3. Dokumen Pasca Pengadaan dihitung melalui berkas Pasca Pengadaan (Kontrak, SPMK, SHO, Gunning, LoI) yang sudah di upload ke dalam sistem
            </h6>
            <h6 style="font-family: 'Poppins', sans-serif;">
                4. Dokumen Tagihan dihitung melalui 18 checklist Tagihan yang sudah di upload ke dalam sistem
            </h6>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modal_m1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MODUL 1 - DOKUMEN KONTRAK MANAJEMEN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kontrak Manajemen</th>
                            <th>Sub Area</th>
                            <th>No Kontrak</th>
                            <th>Tanggal Kontrak</th>
                            <th>Tahun Anggaran</th>
                            <th>Done</th>
                            <th>On Progres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_kontrak as $key => $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_kontrak'] ?></td>
                                <td><?= $value['nama_sub_area'] ?></td>
                                <td><?= $value['no_kontrak'] ?></td>
                                <td><?= $value['tahun_kontrak'] ?></td>
                                <td><?= $value['tahun_anggaran'] ?></td>
                                <td>
                                    <?php $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_dokumen_penunjang', 'mst_kontrak.id_kontrak = tbl_dokumen_penunjang.id_kontrak');
                                    $this->db->where('mst_kontrak.id_kontrak', $value['id_kontrak']);
                                    $query = $this->db->count_all_results();
                                    ?>
                                    <?= $query ?>
                                </td>
                                <td>
                                    <?php $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('table_adendum', 'mst_kontrak.id_kontrak = table_adendum.id_kontrak');
                                    $this->db->where('mst_kontrak.id_kontrak', $value['id_kontrak']);
                                    $query2 =  $this->db->count_all_results();
                                    ?>
                                    <?= $query2 - $query  ?>
                                </td>
                            </tr>
                        <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="modal_m2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MODUL 2 - DOKUMEN PRA PENGADAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Pekerjaan</th>
                            <th>Done</th>
                            <th>On Progres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_pekerjaan as $key => $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                <td>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
                                    $this->db->join('tbl_dokumen_surat_pra', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_dokumen_surat_pra.file !=', NULL);
                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $query = $this->db->count_all_results();
                                    ?>
                                    <?= $query ?>
                                </td>
                                <td>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
                                    $this->db->join('tbl_dokumen_surat_pra', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pra.id_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_dokumen_surat_pra.file', NULL);
                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $query2 =  $this->db->count_all_results();
                                    ?>
                                    <?= $query2 - $query  ?>
                                </td>
                            </tr>
                        <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="modal_m2_pasca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MODUL 2 - DOKUMEN PRA PENGADAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Pekerjaan</th>
                            <th>Done</th>
                            <th>On Progres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_pekerjaan as $key => $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                <td>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
                                    $this->db->join('tbl_dokumen_surat_pasca', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_dokumen_surat_pasca.file !=', NULL);
                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $query_pasca1 = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
                                    $this->db->join('tbl_dokumen_kontrak_hps', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_kontrak_hps.id_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $this->db->where('tbl_dokumen_kontrak_hps.nama_file !=', NULL);
                                    $query_pasca2 = $this->db->count_all_results();
                                    ?>
                                    <?= $query_pasca1 + $query_pasca2 ?>
                                    <?php $total_done = $query_pasca1 + $query_pasca2 ?>
                                </td>
                                <td>
                                    <?php
                                    $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
                                    $this->db->join('tbl_dokumen_surat_pasca', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_surat_pasca.id_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_dokumen_surat_pasca.file', NULL);
                                    $this->db->where('tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa', $value['id_detail_program_penyedia_jasa']);
                                    $query_pasca1_progres = $this->db->count_all_results();

                                    $this->db->select('*');
                                    $this->db->from('mst_kontrak');
                                    $this->db->join('tbl_detail_program_penyedia_jasa', 'mst_kontrak.id_kontrak = tbl_detail_program_penyedia_jasa.id_kontrak');
                                    $this->db->join('tbl_dokumen_kontrak_hps', 'tbl_detail_program_penyedia_jasa.id_detail_program_penyedia_jasa = tbl_dokumen_kontrak_hps.id_detail_program_penyedia_jasa');
                                    $this->db->where('tbl_dokumen_kontrak_hps.nama_file', NULL);
                                    $query_pasca2_progres = $this->db->count_all_results();
                                    ?>
                                    <?= $query_pasca1_progres + $query_pasca2_progres - $total_done + 1 ?>
                                </td>
                            </tr>
                        <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="modal_m3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MODUL 2 - DOKUMEN PRA PENGADAAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Uraian Pekerjaan</th>
                            <th>No Kontrak</th>
                            <th>MC</th>
                            <th>Done</th>
                            <th>On Progres</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data_mc as $key => $value) { ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $value['nama_pekerjaan_program_mata_anggaran'] ?></td>
                                <td>
                                    <?= $value['no_kontrak_penyedia'] ?>
                                </td>
                                <td>
                                    <?= $value['no_mc'] ?>
                                </td>
                                <td>0</td>
                                <td>19</td>
                            </tr>
                        <?php   } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>