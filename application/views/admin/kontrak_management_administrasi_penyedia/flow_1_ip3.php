<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
        </div>
    </div><br><br>
    <input type="text" name="type_pip_number" value="4">
    <input type="hidden" name="id_detail_program_penyedia_jasa">
    <?php if ($sub_program['format_persetujuan_pip'] == 'Coordinator Area - Operation 2 Gm') { ?>
    <?php   } else { ?>
        <div class="row">
            <div class="col-md-12">
                <div style="background-color:black;width:100%;height:3px">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <b>PERSETUJUAN DIREKTUR UTAMA</b>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div style="background-color:black;width:100%;height:2px">

                </div>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Nomor</label>
            </div>
            <div class="col-md-9">
                <label for="" style="margin-right: auto;">: <input type="text" name="no_surat_persetujuan_pip_dirops_ke_dirut"></label>
            </div>
            <div class="col-md-2">
                <label for="" style="margin-left: -15px;"><input type="date" name="tgl_surat_persetujuan_pip_dirops_ke_dirut"></label>
            </div>
        </div>
        <div class="mt-5">
            Yth.
            <br>
            <b> Direktur Utama</b> <br>
            PT Jasamarga Tollroad Maintenance <br>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-12"> Menunjuk permohonan saudara di atas dan memperhatikan
                    ketentuan-ketentuan yang berlaku, maka
                    dengan ini kami :
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <center>
                    <b>MENYETUJUI / TIDAK MENYETUJUI</b>
                </center>
            </div>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-12"> Permohonan Saudara untuk melaksanakan Pengadaan
                    <?= $sub_program['jenis_pengadaan'] ?> <?= $sub_program['nama_pekerjaan_pip'] ?>, dengan tetap
                    berpedoman pada peraturan dan ketentuan yang beriaku
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        Demikian kami sampaikan, untuk dilaksanakan dengan sebaik-baiknya dan penuh tanggung jawab.
        <br><br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>
                    <br>
                    <br>
                    <br><br><br><br>
                    <h5><input type="text" name="nama_persetujuan_pip_dirops_ke_dirut"></h5>
                    <div style="background-color:black;width:100%;height:3px">

                    </div>
                    <h5>Direktur Utama
                    </h5>
                    <br><br><br>
                </center>
            </div>
        </div>
    <?php   } ?>
</div>