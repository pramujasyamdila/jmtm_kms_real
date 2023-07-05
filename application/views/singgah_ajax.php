<script>
    var modal_dok_penunjang = $('#modal_dok_penunjang');
    var form_dok_penunjang = $('#form_dok_penunjang');
    var tabledata_dok_penunjang = $('#tabledata_dok_penunjang');

    function ModalPenunjang(add) {
        modal_dok_penunjang.modal('show');
        $('[name="sts_dokumen"]').val(add);
        $('[name="id_kontrak"]').val();
        var id_kontrak = $('[name="id_kontrak"]').val();
        var sts_dokumen = $('[name="sts_dokumen"]').val(add);
        console.log('kontrakl,', id_kontrak);
        tabledata_dok_penunjang.DataTable({
            "responsive": true,
            "autoWidth": false,
            "processing": true,
            "serverSide": true,
            // "searching": false,
            "order": [],
            "ajax": {
                "url": "<?= base_url('admin/data_kontrak/data_get_dok_penunjang/') ?>" + id_kontrak,
                "type": "POST",
                data: {
                    add: add,
                }
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": true
            }],
            "oLanguage": {
                "sSearch": "Pencarian : ",
                "sEmptyTable": "Data Tidak Tersedia",
                "sLoadingRecords": "Silahkan Tunggu - loading...",
                "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                "sZeroRecords": "Moho Maaf Tidak Ada Data Paket Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        });
    }

    form_dok_penunjang.on('submit', function(e) {
        e.preventDefault();
        if ($('.file_dokumen_penunjang').val() == '') {
            $('#error_file').show();
            setTimeout(function() {
                $('#error_file').hide();
            }, 4000);
        } else {
            $.ajax({
                url: "<?= base_url('admin/data_kontrak/add_dok_penunjang') ?>",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#upload').attr('disabled', 'disabled');
                    $('#process').css('display', 'block');
                    $('#sedang_dikirim').show();
                },
                success: function(response) {
                    var percentage = 0;
                    var timer = setInterval(function() {
                        percentage = percentage + 20;
                        progress_bar_process_dok_penunjang(percentage, timer);
                    }, 1000);
                }
            });
        }
    });


    function progress_bar_process_dok_penunjang(percentage, timer) {
        $('.progress-bar').css('width', percentage + '%');
        if (percentage > 100) {
            clearInterval(timer);
            $('#form_dok_penunjang')[0].reset();
            $('#process').css('display', 'none');
            $('#sedang_dikirim').show();
            $('.progress-bar').css('width', percentage + '%');
            $('#upload').attr('disabled', false);
            message('success', 'Data Berhasil Di Tambah!', 'Berhasil')
            location.reload()
        }
    }
</script>