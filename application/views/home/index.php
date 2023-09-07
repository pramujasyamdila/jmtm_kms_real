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

    h2,
    h6 {
        font-family: 'Poppins', sans-serif;
    }
</style>
<div class="main-content" style="font-family: 'RNSSanz-Bold'">
    <?php if ($this->session->userdata('id_kontrak')) { ?>
        <section class="section">
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;position: fixed; top:50px; padding-bottom: -10px;">
                <b style="margin-left: auto; font-weight:1000;" class="text-black"> <?= $kontrak['nama_kontrak'] ?> - <?= $kontrak['tahun_anggaran'] ?> - Lembar Kerja - Home</b>
            </nav>


            <div class="card popin" style="margin-top: 30px; padding: 20px; color:white; background-image: url('assets/image/bg.PNG'); ">
                <h2>Selamat datang di Aplikasi Digitalisasi Proses Kerja Kontrak Manajemen
                    Modul Lembar Kerja untuk Kontrak Manajemen <br>
                    <?= $kontrak['nama_kontrak'] ?> - <?= $kontrak['tahun_anggaran'] ?>
                </h2>
            </div>

            <div class="card popin" style="margin-top: -20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2>Lembar Kerja terdiri dari beberapa modul untuk 1 Kontrak Manajemen tertentu yang telah dipilih
                </h2>
            </div>


            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2>MODUL 1 - MATA ANGGARAN</h2>
                <h6 for="">Modul ini bertujuan untuk memilih mata anggaran yang akan dibuat menjadi suatu Program Pekerjaan
                </h6>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2>MODUL 2 - MODUL ADMINISTRASI PENYEDIA JASA
                </h2>
                <h6 for="">Modul ini digunakan untuk menyusun Administrasi Penyedia Jasa yang terdiri dari Pra Pengadaan dan Pasca Pengadaan
                </h6>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2>MODUL 3 - MODUL TAGIHAN PENYEDIA JASA</h2>
                <h6 for="">Modul ini digunakan untuk menyusun Tagihan Penyedia Jasa dan Tracking Tagihan Penyedia Jasa
                </h6>
            </div>
        </section>
    <?php } else { ?>
        <section class="section">
            <nav class="navbar navbar-expand-lg main-navbar" style="background-color:#fce49c;height:50px;position: fixed; top:50px;  padding-bottom: -10px;">
                <b style="margin-left: auto; font-weight:1000" class="text-black">Home</b>
            </nav>


            <div class="card" style="margin-top: 60px; padding: 20px;background-image: url('assets/image/bg.PNG');color:white">
                <h2><b> Selamat Datang di Aplikasi Digitalisasi Proses Kerja Kontrak Manajemen Di dalam Aplikasi ini terdapat 4 Modul Utama</b></h2>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2><b> MODUL 1 - MODUL KONTRAK MANAJEMEN</b></h2>
                <h6 for="">Modul ini digunakan dalam membuat Data Terkait Informasi Kontrak Manajemen yang sudah ada</h6>
            </div>


            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2><b> MODUL 2 - MODUL KONTRAK MANAJEMEN </b></h2>
                <h6 for="">Modul ini digunakan untuk menyusun Administrasi Penyedia Jasa yang terdiri dari Pra Pengadaan dan Pasca Pengadaan</h6>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2><b> MODUL 3 - MODUL TAGIHAN PENYEDIA JASA </b></h2>
                <h6 for="">Modul ini digunakan untuk menyusun Tagihan Penyedia Jasa dan Tracking Tagihan Penyedia Jasa</h6>
            </div>

            <div class="card" style="margin-top: 20px; padding: 30px;background-image: url('assets/image/bg.PNG'); color:white">
                <h2><b> MODUL 4 - MODUL ANALISIS DATA</b></h2>
                <h6 for="">Modul ini digunakan untuk melihat Analisis Data dari Data - Data yang sudah diinput di Modul Sebelumnya</h6>
            </div>
        </section>
    <?php  } ?>

</div>