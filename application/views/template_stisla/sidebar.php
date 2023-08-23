<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper" style="font-family: RNSSanz-ExtraBold;">
        <div class="sidebar-brand">
            <a href="index.html"> <img src="<?php echo base_url() ?>assets/image/jmtmlogin.png" alt="AdminLTE Logo" class="brand-image elevation-5" style="opacity: .8"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="<?php echo base_url() ?>assets/image/input.png" alt="AdminLTE Logo" style="width:50px;"></a>
        </div>

        <?php
        $session = $this->session->userdata('id_kontrak');
        if ($session) { ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Home</li>
                <li class="dropdown active">
                    <a href="<?= base_url('home') ?>"><i class="fas fa-fire"></i><span>Home</span></a>
                </li>


                <li class="menu-header">Lembar Kerja</li>

                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Modul 1 : Kontrak Management</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('admin/data_kontrak') ?>"><i class="fa fa-tasks" aria-hidden="true"></i><span>Management Kontrak</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('admin/data_kontrak_penyedia_jasa') ?>"><i class="fa fa-tags" aria-hidden="true"></i><span>Mata Anggaran</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('admin/data_kontrak_penyedia_jasa/kelola_level/' . $session) ?>"><i class="fa fa-tags" aria-hidden="true"></i><span>Mata Anggaran</span></a></li>
                    </ul>

                </li>

                <!-- <li class="menu-header" style="font-size: 16px;">MODUL 1 <br> <label for="" style="font-size: 14x;">KONTRAK MANAJEMEN</label> </li> -->

                <!-- <li><a class="nav-link" href="<?= base_url('admin/data_kontrak_penyedia_jasa/kelola_level/' . $session) ?>"><i class="fa fa-tags" aria-hidden="true"></i><span>Mata Anggaran</span></a></li> -->

                <!-- <li class="menu-header" style="font-size: 16px;">MODUL 2 <br> <label for="" style="font-size: 14x;">ADMINISTRASI KONTRAK</label> </li> -->
                <br>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Modul 2 : Administrasi Kontrak</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('admin/administrasi_penyedia/list_program/') . $session ?>"><i class="fa fa-indent" aria-hidden="true"></i><span>Pra Pengadaan</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak/list_program/') . $session ?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Pasca Pengadaan</span></a></li>
                    </ul>

                </li>
                <br>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Modul 3 : Administrasi Tagihan</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak/list_program_taggihan/') . $session ?>"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Administrasi Tagihan</span></a></li>
                    </ul>

                </li>
                <!-- <li class="menu-header" style="font-size: 16px;">MODUL 3 <br> <label for="" style="font-size: 14x;">ADMINISTRASI TAGIHAN</label> </li> -->

                <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                    <a href="<?= base_url('admin/lembar_kerja/hapus_session_lembar_kerja') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split" style="background-color: #302B63;">
                        <i class="fas fa-sign-out"></i> Pilih Lembar Kerja Baru
                    </a>
                </div>
            </ul>
        <?php } else { ?>
            <ul class="sidebar-menu">
                <li class="menu-header">Home</li>
                <li class="dropdown active">
                    <a href="<?= base_url('home') ?>"><i class="fas fa-fire"></i><span>Home</span></a>
                </li>
                <?php if ($id_departemen == 4) { ?>
                    <li class="menu-header">Master</li>
                    <li class="dropdown">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link" href="<?= base_url('admin/data_pengguna') ?>"><i class="fas fa fa-user"></i> Data Pengguna</a></li>
                        </ul>
                    </li>
                <?php    } else { ?>

                <?php   }
                ?>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Modul 1 Kontrak Manajemen</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('admin/data_kontrak') ?>"><i class="fa fa-tasks" aria-hidden="true"></i><span>Management Kontrak</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('admin/data_kontrak_penyedia_jasa') ?>"><i class="fa fa-tags" aria-hidden="true"></i><span>Mata Anggaran</span></a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="<?= base_url('admin/lembar_kerja') ?>"><i class="fa fa-tasks" aria-hidden="true"></i><span>Lembar Kerja</span></a></li>
                <!-- <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Modul 1 Kontrak Manajemen</span></a>
                                                                                                                                            <li><a class="nav-link" href="<?= base_url('admin/data_kontrak') ?>"><i class="fa fa-tasks" aria-hidden="true"></i><span>Management Kontrak</span></a></li>
                                                                                                                                            <li><a class="nav-link" href="<?= base_url('admin/data_kontrak_penyedia_jasa') ?>"><i class="fa fa-tags" aria-hidden="true"></i><span>Mata Anggaran</span></a></li>
                                                                                                                                            <li class="menu-header text-modul" style="font-size: 16px;">MODUL Lembar Kerja</li>
                                                                                                                                            <li><a class="nav-link" href="<?= base_url('admin/lembar_kerja') ?>"><i class="fa fa-tasks" aria-hidden="true"></i><span>Lembar Kerja</span></a></li> -->
                <!-- <li class="menu-header">Administrasi Penyedia</li>
                                                                                                                                                                                                <li><a class="nav-link" href="<?= base_url('admin/administrasi_penyedia') ?>"><i class="fa fa-indent" aria-hidden="true"></i><span>Pra Pengadaan</span></a></li>
                                                                                                                                                                                                <li><a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak/pasca_pengadaan') ?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Pasca Pengadaan</span></a></li>
                                                                                                                                                                                                <li class="menu-header">Administrasi Taggihan</li> -->
                <!-- <li><a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak') ?>"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Administrasi Tagihan</span></a></li> -->
                <li class="menu-header text-modul">MODUL 4 <br> <label for="" style="font-size: 14x;">Analisis Data</label> </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Modul 4 ANALISIS DATA</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="<?= base_url('admin/analisa_tagihan') ?>"><i class="fa fa-tag" aria-hidden="true"></i><span>Analisa Tagihan</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('traking_hps/traking_hps') ?>"><i class="fa fa-tag" aria-hidden="true"></i><span> Harga Satuan</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('laporan_kinerja') ?>"><i class="fa fa-file" aria-hidden="true"></i><span>Laporan Kinerja</span></a></li>
                        <li><a class="nav-link" href="<?= base_url('rekapitulasi') ?>"><i class="fa fa-file" aria-hidden="true"></i><span>Rekapitulasi Berkas </span></a></li>
                    </ul>
                </li>

                <!-- <li><a class="nav-link" href="<?= base_url('admin/analisa_tagihan') ?>"><i class="fa fa-tag" aria-hidden="true"></i><span>Analisa Tagihan</span></a></li>
                                                                                                                    <li><a class="nav-link" href="<?= base_url('traking_hps/traking_hps') ?>"><i class="fa fa-tag" aria-hidden="true"></i><span>Tracking Harga Satuan</span></a></li>
                                                                                                                    <li><a class="nav-link" href="<?= base_url('laporan_kinerja') ?>"><i class="fa fa-file" aria-hidden="true"></i><span>Laporan Kinerja</span></a></li>
                                                                                                                    <li><a class="nav-link" href="<?= base_url('rekapitulasi') ?>"><i class="fa fa-file" aria-hidden="true"></i><span>Rekapitulasi Berkas </span></a></li> -->
            </ul>
            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="<?= base_url('auth/logout') ?>" class="btn btn-primary btn-lg btn-block btn-icon-split" style="background-color: #302B63;">
                    <i class="fas fa-sign-out"></i> Logout
                </a>
            </div>
        <?php   }  ?>



    </aside>
</div>