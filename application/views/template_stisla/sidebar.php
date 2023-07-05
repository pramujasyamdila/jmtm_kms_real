<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <img src="<?php echo base_url() ?>assets/image/jmtmlogin.png" alt="AdminLTE Logo" class="brand-image elevation-5" style="opacity: .8"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="<?php echo base_url() ?>assets/image/input.png" alt="AdminLTE Logo" style="width:50px;"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
                <a href="<?= base_url('admin/dashboard') ?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
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
            <li class="menu-header">Management Kontrak</li>
            <li><a class="nav-link" href="<?= base_url('admin/data_kontrak') ?>"><i class="fa fa-tasks" aria-hidden="true"></i><span>Management Kontrak</span></a></li>
            <li><a class="nav-link" href="<?= base_url('admin/data_kontrak_penyedia_jasa') ?>"><i class="fa fa-tags" aria-hidden="true"></i><span>Mata Anggaran</span></a></li>
            <li class="menu-header">Administrasi Penyedia</li>
            <li><a class="nav-link" href="<?= base_url('admin/administrasi_penyedia') ?>"><i class="fa fa-indent" aria-hidden="true"></i><span>Pra Pengadaan</span></a></li>
            <li><a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak/pasca_pengadaan') ?>"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Pasca Pengadaan</span></a></li>
            <li class="menu-header">Administrasi Taggihan</li>
            <li><a class="nav-link" href="<?= base_url('administrasi_kontrak/administrasi_kontrak') ?>"><i class="fa fa-credit-card" aria-hidden="true"></i><span>Administrasi Tagihan</span></a></li>
            <li class="menu-header">Tracking Harga Satuan</li>
            <li><a class="nav-link" href="<?=   base_url('traking_hps/traking_hps') ?>"><i class="fa fa-tag" aria-hidden="true"></i><span>Tracking Harga Satuan</span></a></li>
            <li class="menu-header">Laporan Kinerja</li>
            <li><a class="nav-link" href="<?= base_url('laporan_kinerja') ?>"><i class="fa fa-file" aria-hidden="true"></i><span>Laporan Kinerja</span></a></li>
            <li class="menu-header">Analisis Data</li>
            <li><a class="nav-link" href="<?= base_url('rekapitulasi') ?>"><i class="fa fa-file" aria-hidden="true"></i><span>Rekapitulasi Berkas </span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="<?= base_url('auth/logout')?>" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-sign-out"></i> Logout
            </a>
        </div>
    </aside>
</div>