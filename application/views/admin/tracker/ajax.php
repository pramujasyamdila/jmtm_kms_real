<script>
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }
    var tbl_pekerjaan_penyedia = $('#tbl_pekerjaan_penyedia');

    function reload_table() {
        tbl_pekerjaan_penyedia.DataTable().ajax.reload();
    }
    $(document).ready(function() {
        function fill_datatable(cari_nama_penyedia = '') {
            tbl_pekerjaan_penyedia.DataTable({
                "responsive": false,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,
                dom: 'Bfrtip',
                buttons: [
                    'excel', 'pdf', 'print'
                ],
                "order": [],
                "ajax": {
                    "url": "<?= base_url('admin/tracker/get_data_pekerjaan_vendor') ?>",
                    "type": "POST",
                    data: {
                        cari_nama_penyedia: cari_nama_penyedia
                    }
                },
                "columnDefs": [{
                    "target": [-1],
                    "orderable": false
                }],
                "oLanguage": {
                    "sSearch": "Pencarian : ",
                    "sEmptyTable": "Data Tidak Tersedia",
                    "sLoadingRecords": "Silahkan Tunggu - loading...",
                    "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                    "sZeroRecords": "Tidak Ada DataYang Di Cari",
                },
            });
        }
        $('#filter').click(function() {
            $('.data_vendor_pekerjaan').css('display', 'block');
            $('.data_vendor_pekerjaan_average').css('display', 'block');
            var cari_nama_penyedia = $('#cari_nama_penyedia').val();
            if (cari_nama_penyedia != '') {
                tbl_pekerjaan_penyedia.DataTable().destroy();
                fill_datatable(cari_nama_penyedia);
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('admin/tracker/by_id_detail_program_penyedia_jasa_nama_penyedia') ?>",
                    dataType: "JSON",
                    data:{
                        cari_nama_penyedia:cari_nama_penyedia
                    },
                    success: function(response) {
                        $('.nama_vendor_all').html(cari_nama_penyedia);
                        $('.average_vendor_all').html(response['average_mc_all'].avg_vendor);
                        $('.average_area_all').html(response['average_mc_all'].avg_area);
                        $('.average_pusat_all').html(response['average_mc_all'].avg_pusat);
                        $('.average_finance_all').html(response['average_mc_all'].avg_finance);
                    }
                });
            } else {
                message('No. Kontrak Belum Di isi!', 'warning', 'Gagal Mendapatkan Data!')
            }
        })

    });


    function byid(id_detail_program_penyedia_jasa, type) {
        var modal_detail = $('#modal_detail');
        $.ajax({
            type: "POST",
            url: "<?= base_url('admin/tracker/by_id_detail_program_penyedia_jasa/') ?>" + id_detail_program_penyedia_jasa,
            dataType: "JSON",
            success: function(response) {
                modal_detail.modal('show');
                var html = '';
                var i;
                var no = 0;
                var kirim_inisial = 0;
                for (i = 0; i < response['result_tracking_mc'].length; ++i) {
                    html += '<tr>' +
                        '<td>' + response['result_tracking_mc'][i].no_mc + ' </td>' +
                        '<td>' + response['result_tracking_mc'][i].tanggal_mc + ' </td>' +
                        '<td> Rp. ' + response['result_tracking_mc'][i].setelah_ppn.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00</td>' +
                        '<td>' + response['result_tracking_mc'][i].status_terakhir + ' </td>' +
                        '<td>' + response['result_tracking_mc'][i].sts_tanggal_trakhir + ' </td>' +
                        '<td>' + response['result_tracking_mc'][i].hari_vendor + ' </td>' +
                        '<td>' + response['result_tracking_mc'][i].hari_area + ' </td>' +
                        '<td>' + response['result_tracking_mc'][i].hari_pusat + ' </td>' +
                        '<td>' + response['result_tracking_mc'][i].hari_finance + ' </td>' +
                        '</tr>';
                }
                $('.result_mc').html(html);
                $('.average_vendor').html(response['average_mc'].avg_vendor);
                $('.average_area').html(response['average_mc'].avg_area);
                $('.average_pusat').html(response['average_mc'].avg_pusat);
                $('.average_finance').html(response['average_mc'].avg_finance);
                $('.nama_penyedia').html(response['row_program'].nama_penyedia);
                $('.nama_pekerjaan').html(response['row_program'].nama_pekerjaan_program_mata_anggaran);
            }
        });
    }
</script>