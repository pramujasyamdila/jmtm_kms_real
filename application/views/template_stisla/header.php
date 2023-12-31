<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Kontrak Management</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets_stisla/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/4.2.1/css/fixedColumns.dataTables.min.css">
    <script src="<?= base_url('assets/'); ?>js/sweetalert.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
    <style>
        @font-face {
            font-family: "RNSSanz-Black";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Black.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Bold";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Bold.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-ExtraBold";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-ExtraBold.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Light";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Light.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Medium";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Medium.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-Normal";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-Normal.ttf') ?>) format("truetype");
        }

        @font-face {
            font-family: "RNSSanz-SemiBold";
            src: url(<?= base_url('assets_stisla/fonts/RNSSanz-SemiBold.ttf') ?>) format("truetype");
        }
    </style>
</head>



<body style="font-size: 14px;font-family:'RNSSanz-Light';">
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $hari = array(
            1 => 'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );
        $pecahkan = explode('-', $tanggal);

        // Contoh tanggal 20 Maret 2016 adalah hari Minggu
        $num = date(
            'N',
            strtotime($tanggal)
        );
        return $pecahkan[2]  . '-' . $bulan[(int) $pecahkan[1]] . '-' . $pecahkan[0];
    }
    ?>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color: #302B63;height:50px;
  position: fixed;
  top: 0;">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"> <strong><?= tgl_indo(date('Y-m-d')) ?> || <label for="" id="jam"></label></strong></a>
                    </li>
                    <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
                        <div class="dropdown-menu dropdown-list dropdown-menu-right">
                            <div class="dropdown-header">Notifications
                                <div class="float-right">
                                </div>
                            </div>
                            <div class="dropdown-list-content dropdown-list-icons">
                                <div class="row mt-3" style="margin:5px">
                                    <center>
                                        <label style="font-family: 'Poppins', sans-serif;"><b> MODUL 1 - CHECKLIST DAN TO DO LIST </b></label>
                                    </center>
                                    <div class="col-md-6">
                                        <div class="card bg-success" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;">Done</label>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m1_dok_selesai ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-warning" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;margin-left:5px;">Progres</label>
                                                    </center>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m1_dok_progres2 ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin:5px">
                                    <center>
                                        <label style="font-family: 'Poppins', sans-serif;"><b> MODUL 2 - DOKUMEN PRA PENGADAAN </b></label>
                                    </center>
                                    <div class="col-md-6">
                                        <div class="card bg-success" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;">Done</label>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m2_dok_selesai ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-warning" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;margin-left:5px;">Progres</label>
                                                    </center>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m2_dok_progres ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin:5px">
                                    <center>
                                        <label style="font-family: 'Poppins', sans-serif;"><b> MODUL 2 - DOKUMEN PASCA PENGADAAN </b></label>
                                    </center>
                                    <div class="col-md-6">
                                        <div class="card bg-success" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;">Done</label>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m2_dok_selesai_pasca_final ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-warning" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;margin-left:5px;">Progres</label>
                                                    </center>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m2_final_pasca ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="margin:5px">
                                    <center>
                                        <label style="font-family: 'Poppins', sans-serif;"><b> MODUL 3 - DOKUMEN TAGIHAN </b></label>
                                    </center>
                                    <div class="col-md-6">
                                        <div class="card bg-success" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;">Done</label>
                                                    </center>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m2_dok_selesai_pasca_final ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-warning" style="border-radius:10px;height:50px;">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <center>
                                                        <label style="font-family: 'Poppins', sans-serif;margin-left:5px;">Progres</label>
                                                    </center>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                                        <center>
                                                            <label><?= $m2_final_pasca ?></label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="<?= base_url('admin/to_do_list')?>">View All <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="<?= base_url() ?>assets_stisla/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('username') ?> - Ruas <?= $this->session->userdata('nama_sub_area') ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="<?= base_url('profile') ?>" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <!-- <a href="<?= base_url('setting') ?>" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a> -->
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>