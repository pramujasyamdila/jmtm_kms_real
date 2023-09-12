<div class="main-content">
    <div class="section">

        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Modul 4 : Checklist Dan To Do List</b>
        </nav>

        <div class="card" style="margin-top: 20px; padding: 20px;background: rgb(36,93,120);
background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - CHECKLIST DAN TO DO LIST </b></h4>
            <h6 style="font-family: 'Poppins', sans-serif;">Modul ini bertujuan untuk melihat aktivitas yang telah dikerjakan dan belum di kerjakan dalam Aplikasi Kontrak Manajemen
            </h6>

        </div>

        <div class="card" style="margin-top: -20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px">
            <h4 style="font-family: 'Poppins', sans-serif;"><b> MODUL 4 - CHECKLIST DAN TO DO LIST </b></h4>
            <div class="row" style="padding-left:90px">
                <div class="col-md-4">
                    <div class="card bg-success" style="margin-top: 20px; padding-bottom: 10px; padding-top: 10px; padding-left: 20px; border-radius:10px">
                        <div class="row">
                            <div class="col-md-6">
                                <center>
                                    <h2 style="font-family: 'Poppins', sans-serif;">Selesai</h2>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Sedang Progres</h2>
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
                    <a href="" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Selesai</h2>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Sedang Progres</h2>
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
                    <a href="" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Selesai</h2>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Sedang Progres</h2>
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
                    <a href="" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Selesai</h2>
                                </center>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-warning" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1><?= $m2_dok_progres_pasca_final ?></h1>
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
                                    <h2 style="font-family: 'Poppins', sans-serif;">Sedang Progres</h2>
                                </center>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-success" style="font-family: 'Poppins', sans-serif;">
                                    <center>
                                        <h1>10</h1>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <a href="" class="btn btn-xl btn-primary" style="padding-top: 20px;padding-bottom: 20px;padding-left: 50px;padding-right: 50px;background-color: #302B63;margin-top:53px">Lihat Detail</a>
                </div>
            </div>
        </div>

    </div>
</div>