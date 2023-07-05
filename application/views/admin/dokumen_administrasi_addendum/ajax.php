<script>
    var tabledata = $('#table')
    var form_edit = $('#form_edit')
    var form_tambah_kontrak = $('#form_tambah_kontrak')
    var modal_tambah = $('#tambah_program')
    var lihat_uraian = $('#lihat_uraian')
    var table_uraian = $('#table_uraian')

    // sweetalert
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    $('.select-field').select2({
        theme: 'bootstrap-5'
    });
</script>


<script>
    var modal_kelola_surat = $('#kelola_surat');

    function terbilang(angka) {

        var bilne = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

        if (angka < 12) {

            return bilne[angka];

        } else if (angka < 20) {

            return terbilang(angka - 10) + " belas";

        } else if (angka < 100) {

            return terbilang(Math.floor(parseInt(angka) / 10)) + " puluh " + terbilang(parseInt(angka) % 10);

        } else if (angka < 200) {

            return "seratus " + terbilang(parseInt(angka) - 100);

        } else if (angka < 1000) {

            return terbilang(Math.floor(parseInt(angka) / 100)) + " ratus " + terbilang(parseInt(angka) % 100);

        } else if (angka < 2000) {

            return "seribu " + terbilang(parseInt(angka) - 1000);

        } else if (angka < 1000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000)) + " ribu " + terbilang(parseInt(angka) % 1000);

        } else if (angka < 1000000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000000)) + " juta " + terbilang(parseInt(angka) % 1000000);

        } else if (angka < 1000000000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000000000)) + " milyar " + terbilang(parseInt(angka) % 1000000000);

        } else if (angka < 1000000000000000) {

            return terbilang(Math.floor(parseInt(angka) / 1000000000000)) + " trilyun " + terbilang(parseInt(angka) % 1000000000000);

        }

    }

    Kelola_surat()

    function Kelola_surat() {
        var id = $('[name="id_detail_program_penyedia_jasa"]').val();
        $.ajax({
            type: "GET",
            url: "<?= base_url('admin/administrasi_penyedia/byid_detail_program_penyedia_jasa/'); ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (response['row_program_detail'].sts_tahun_pembebanan == 'single_years') {
                    $('#multi_years_jika_ada').css('display', 'none')
                } else {
                    $('#multi_years_jika_ada').css('display', 'block')
                }
                $('[name="id_detail_program_penyedia_jasa"]').val(response['row_program_detail'].id_detail_program_penyedia_jasa);
                $('.nama_pekerjaan').html(response['row_program_detail'].nama_pekerjaan_program_mata_anggaran);
                $('.nama_area').html(response['row_program_detail'].nama_area);
                $('.jenis_pengadaan').html(response['row_program_detail'].jenis_pengadaan);
                $('.waktu_pelaksanaan_pip').html(response['row_program_detail'].waktu_pelaksanaan_pip);
                $('.waktu_pemeliharaan_pip').html(response['row_program_detail'].waktu_pemeliharaan_pip);
                $('.terbilang_waktu_pemeliharaan_pip').html(terbilang(response['row_program_detail'].waktu_pemeliharaan_pip));
                $('.terbilang_waktu_pelaksanaan_pip').html(terbilang(response['row_program_detail'].waktu_pelaksanaan_pip));
                var nilai_total_multi_years = response['row_program_detail'].total_hps_mata_anggaran * response['count_multi_yeras'];
                $('.total_hps_mata_anggaran').html('Rp. ' + nilai_total_multi_years.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                $('[name="pagu_biaya"]').val(response['row_program_detail'].pagu_biaya);
                $('[name="lampiran_pip"]').val(response['row_program_detail'].lampiran_pip);
                $('[name="jenis_pengadaan"]').val(response['row_program_detail'].jenis_pengadaan);
                $('[name="nama_pekerjaan_pip"]').val(response['row_program_detail'].nama_pekerjaan_pip);
                $('[name="no_surat_pip"]').val(response['row_program_detail'].no_surat_pip);
                $('[name="tgl_surat_pip"]').val(response['row_program_detail'].tgl_surat_pip);
                $('[name="lokasi_pekerjaan_pip"]').val(response['row_program_detail'].lokasi_pekerjaan_pip);
                $('[name="sasaran_pekerjaan_pip"]').val(response['row_program_detail'].sasaran_pekerjaan_pip);
                $('[name="biaya_rkap_pip"]').val(response['row_program_detail'].biaya_rkap_pip);
                $('[name="perkiraan_biaya_pip"]').val(response['row_program_detail'].perkiraan_biaya_pip);
                $('[name="waktu_pelaksanaan_pip"]').val(response['row_program_detail'].waktu_pelaksanaan_pip);
                $('[name="waktu_pemeliharaan_pip"]').val(response['row_program_detail'].waktu_pemeliharaan_pip);
                $('[name="pembebanan_biaya"]').val(response['row_program_detail'].pembebanan_biaya);
                $('[name="format_persetujuan_pip"]').val(response['row_program_detail'].format_persetujuan_pip);
                $('[name="no_surat_hps"]').val(response['row_program_detail'].no_surat_hps);
                $('[name="tgl_surat_hps"]').val(response['row_program_detail'].tgl_surat_hps);
                $('[name="lampiran_hps"]').val(response['row_program_detail'].lampiran_hps);
                $('[name="format_persetujuan_hps"]').val(response['row_program_detail'].format_persetujuan_hps);
                $('[name="no_surat_nota"]').val(response['row_program_detail'].no_surat_nota);
                $('[name="tgl_surat_nota"]').val(response['row_program_detail'].tgl_surat_nota);
                $('[name="format_persetujuan_nota"]').val(response['row_program_detail'].format_persetujuan_nota);
                $('[name="total_hps_mata_anggaran"]').val(response['row_program_detail'].total_hps_mata_anggaran);
                $('.total_hps_pure').html('Rp. ' + response['row_program_detail'].total_hps_mata_anggaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                $('.terbilang_total_hps_pure').html(terbilang(response['row_program_detail'].total_hps_mata_anggaran));
                $('.terbilang_hps').html(terbilang(nilai_total_multi_years));
                $('[name="perkiraan_biaya_pip"]').val(nilai_total_multi_years);
                $('[name="sts_tahun_pembebanan"]').val(response['row_program_detail'].sts_tahun_pembebanan);
                // gunning
                $('[name="no_surat_gunning"]').val(response['row_program_detail'].no_surat_gunning);
                $('[name="tanggal_gunning"]').val(response['row_program_detail'].tanggal_gunning);
                $('[name="lampiran_gunning"]').val(response['row_program_detail'].lampiran_gunning);
                $('[name="tkdn_gunning"]').val(response['row_program_detail'].tkdn_gunning);

                // loi
                $('[name="no_surat_loi"]').val(response['row_program_detail'].no_surat_loi);
                $('[name="tanggal_loi"]').val(response['row_program_detail'].tanggal_loi);
                $('[name="lampiran_loi"]').val(response['row_program_detail'].lampiran_loi);
                $('[name="no_surat_penunjukan_loi"]').val(response['row_program_detail'].no_surat_penunjukan_loi);

                // sho
                $('[name="no_surat_sho"]').val(response['row_program_detail'].no_surat_sho);
                $('[name="tanggal_sho"]').val(response['row_program_detail'].tanggal_sho);

                // smk
                $('[name="no_surat_smk"]').val(response['row_program_detail'].no_surat_smk);
                $('[name="tanggal_smk"]').val(response['row_program_detail'].tanggal_smk);
                $('[name="lampiran_smk"]').val(response['row_program_detail'].lampiran_smk);
                // hps hps

                // addendum trakhir
                $('.no_addendum_trakhir').html(response['row_administrasi_addedum'].no_addendum);

                // total_kontrak_awal
                $('.total_kontrak_awal').html('Rp. ' + response['row_program_detail'].total_kontrak.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                $('.total_kontrak_addendum_trakhir').html('Rp. ' + response['total_kontrak_addendum'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');

                var html = '';
                var html_ppip = '';
                var i;
                for (i = 0; i < response['data_spm'].length; i++) {
                    $hps = response['data_spm'][i].hps;
                    html += '<a href="javascript:;" onclick="hapus_spm(' + response['data_spm'][i].id_spm + ')" class="text-dark"> ' + response['data_spm'][i].nama_spm + ', <i class="text-danger fas fa fa-trash"></i></a>';
                    html_ppip += '<a href="javascript:;" class="text-dark"> ' + response['data_spm'][i].nama_spm + ',</a>';
                }
                $('.result_spm').html(html);
                $('.result_spm_ppip').html(html_ppip);
                

                var html2 = '';
                var html2_ppip = '';
                var j;
                for (j = 0; j < response['data_multi_years'].length; j++) {
                    html2 += '<a href="javascript:;" onclick="hapus_multi_years(' + response['data_multi_years'][j].id_multi_years + ')" class="text-dark"> ' + response['data_multi_years'][j].tahun_multiyers + ', <i class="text-danger fas fa fa-trash"></i></a>';
                    html2_ppip += '<a href="javascript:;" class="text-dark">Tahun ' + response['data_multi_years'][j].tahun_multiyers + ',</a>';
                }
                $('.result_multiyears').html(html2);
                $('.result_multiyears_ppip').html(html2_ppip);

                var html3 = '';
                var x;
                for (x = 0; x < response['data_teknis'].length; x++) {
                    html3 += '<div class="row"><div class="col-md-1">2.' + [x + 1] + '</div>' +
                        '<div class="col-md-11" style="margin-left: -40px;">' +
                        '<b>' + response['data_teknis'][x].nama_alasan + '</b>' +
                        '&nbsp;<a href="javascript:;" onclick="hapus_teknis(' + response['data_teknis'][x].id_alasan_teknis + ')" class="text-dark"><i class="text-danger fas fa fa-trash"></i></a>' +
                        '</div>' +
                        '</div>';
                }
                $('#alasan_teknis').html(html3);

                var html4 = '';
                var o;
                for (o = 0; o < response['data_administrasi'].length; o++) {
                    html4 += '<div class="row"><div class="col-md-1">1.' + [o + 1] + '</div>' +
                        '<div class="col-md-11" style="margin-left: -40px;">' +
                        '<b>' + response['data_administrasi'][o].nama_alasan + '</b>' +
                        '&nbsp;<a href="javascript:;" onclick="hapus_administrasi(' + response['data_administrasi'][o].id_alasan_administrasi + ')" class="text-dark"><i class="text-danger fas fa fa-trash"></i></a>' +
                        '</div>' +
                        '</div>';
                }
                $('#alasan_administrasi').html(html4);
            }
        })
    }
</script>

<script>
    $('#myTab a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>