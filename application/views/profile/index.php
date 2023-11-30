<div class="main-content">
    <section class="section">
        <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;
  position: fixed; top:50px;  padding-bottom: -10px;">
            <b style="margin-left: auto; font-weight:1000" class="text-black">Profile</b>
        </nav>
        <div class="section-body">
            <h2 class="section-title">Hi, <?= $this->session->userdata('nama_pegawai'); ?> !</h2>
            <p class="section-lead">
                Access Control.
            </p>
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-5">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <center>
                                <img alt="image" class="mt-2" style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/219/219983.png" />
                                <br>
                                Hi, <?= $this->session->userdata('nama_pegawai'); ?> !<br>
                            </center>
                            <br>
                            <div class="profile-widget-items">
                                <div class="profile-widget-item" style="padding: 5px;">
                                    <div class="profile-widget-item-label">Operasi</div>
                                    <div class="profile-widget-item-value"><?= $this->session->userdata('nama_departemen'); ?></div>
                                </div>
                                <div class="profile-widget-item" style="padding: 5px;">
                                    <div class="profile-widget-item-label">Area</div>
                                    <div class="profile-widget-item-value"><?= $this->session->userdata('nama_area'); ?></div>
                                </div>
                                <div class="profile-widget-item" style="padding: 5px;">
                                    <div class="profile-widget-item-label">Sub Area</div>
                                    <div class="profile-widget-item-value"><?= $this->session->userdata('nama_sub_area'); ?></div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="profile-widget-description">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="profile-widget-name">NPP <div class="text-muted d-inline font-weight-normal">
                                        </div>
                                    </div>
                                    <input type="text" name="nip" value="<?= $this->session->userdata('nip'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <div class="profile-widget-name">Telepon <div class="text-muted d-inline font-weight-normal">
                                        </div>
                                    </div>
                                    <input type="text" name="telepon" value="<?= $this->session->userdata('telepon'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <div class="profile-widget-name">Alamat <div class="text-muted d-inline font-weight-normal">
                                        </div>
                                    </div>
                                    <input type="text" name="alamat" value="<?= $this->session->userdata('alamat'); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7">
                    <div class="card" style="margin-top: 35px;">
                        <?php if ($this->session->flashdata('password_kosong')) {
                            echo '  <div class="alert alert-danger alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-exclamation-triangle"></i> Maaf !</h5>';
                            echo  $this->session->flashdata('password_kosong');
                            echo ' </div>';
                        } ?>

                        <?php if ($this->session->flashdata('berhasil_ubah_password')) {
                            echo '  <div class="alert alert-success alert-dismissible">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5><i class="icon fas fa-exclamation-triangle"></i> Berhasil !</h5>';
                            echo  $this->session->flashdata('berhasil_ubah_password');
                            echo ' </div>';
                        } ?>
                        <form method="post" class="needs-validation" action="<?= base_url('auth/ubah_password') ?>">
                            <div class="card-header">
                                <h4>Edit Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id_pegawai" value="<?= $this->session->userdata('id_pegawai') ?>">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="username" value="<?= $this->session->userdata('username') ?>">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>New Password</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" id="password" name="password" required>
                                            </div>
                                            <div class="col-md-2">
                                                <a href="javascript:;" class="btn btn-secondary" onclick="myFunction1()"> <i class="fas fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="javascript:;" class="btn btn-secondary" onclick="myFunction2()"> <i class="fas fa fa-eye"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>