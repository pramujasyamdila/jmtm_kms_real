<style>
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }

    tr {
        height: 50px;
    }
</style>
<div class="main-content" style="font-family: 'RNSSanz-Light'">
    <?php if ($this->session->userdata('id_kontrak')) { ?>
        <section class="section">
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;position: fixed; top:50px;  padding-bottom: -10px;">
                <b style="margin-left: auto; font-weight:1000" class="text-black"> <?= $kontrak['nama_kontrak'] ?> - <?= $kontrak['tahun_anggaran'] ?> - Lembar Kerja - Home</b>
            </nav>


            <div class="card" style="margin-top: 60px; padding: 20px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h2>Selamat datang di Aplikasi Digitalisasi Proses Kerja Kontrak Manajemen
                    Modul Lembar Kerja untuk Kontrak Manajemen <br>
                    <?= $kontrak['nama_kontrak'] ?> - <?= $kontrak['tahun_anggaran'] ?>
                </h2>
            </div>

            <div class="card" style="margin-top: -20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>Lembar Kerja terdiri dari beberapa modul untuk 1 Kontrak Manajemen tertentu yang telah dipilih
                </h6>
            </div>


            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 1 - MATA ANGGARAN</h6>
                <label for="">Modul ini bertujuan untuk memilih mata anggaran yang akan dibuat menjadi suatu Program Pekerjaan
                </label>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 2 - MODUL ADMINISTRASI PENYEDIA JASA
                </h6>
                <label for="">Modul ini digunakan untuk menyusun Administrasi Penyedia Jasa yang terdiri dari Pra Pengadaan dan Pasca Pengadaan
                </label>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 3 - MODUL TAGIHAN PENYEDIA JASA</h6>
                <label for="">Modul ini digunakan untuk menyusun Tagihan Penyedia Jasa dan Tracking Tagihan Penyedia Jasa
                </label>
            </div>
        </section>
    <?php } else { ?>
        <section class="section">
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;position: fixed; top:50px;  padding-bottom: -10px;">
                <b style="margin-left: auto; font-weight:1000" class="text-black">Home</b>
            </nav>


            <div class="card" style="margin-top: 60px; padding: 20px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h2>Selamat Datang di Aplikasi Digitalisasi Proses Kerja Kontrak Manajemen Di dalam Aplikasi ini terdapat 4 Modul Utama</h2>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 1 - MODUL KONTRAK MANAJEMEN</h6>
                <label for="">Modul ini digunakan dalam membuat Data Terkait Informasi Kontrak Manajemen yang sudah ada</label>
            </div>


            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 2 - MODUL KONTRAK MANAJEMEN</h6>
                <label for="">Modul ini digunakan untuk menyusun Administrasi Penyedia Jasa yang terdiri dari Pra Pengadaan dan Pasca Pengadaan</label>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 3 - MODUL TAGIHAN PENYEDIA JASA</h6>
                <label for="">Modul ini digunakan untuk menyusun Tagihan Penyedia Jasa dan Tracking Tagihan Penyedia Jasa</label>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background: rgb(36,93,120);background: linear-gradient(188deg, rgba(36,93,120,1) 47%, rgba(1,118,205,1) 92%); color:white">
                <h6>MODUL 4 - MODUL ANALISIS DATA</h6>
                <label for="">Modul ini digunakan untuk melihat Analisis Data dari Data - Data yang sudah diinput di Modul Sebelumnya</label>
            </div>
        </section>
    <?php  } ?>

</div>