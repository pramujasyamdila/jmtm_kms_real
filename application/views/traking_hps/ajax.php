<script>
    Filte_add()
    // sweetalert
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }

    function Filte_add() {
        var sampai = $('[name="sampai_add"]').val();
        if (sampai == 1) {
            for (let step = 1; step <= 1; step++) {
                $('#value_add_' + step + '').css('display', 'block')
            }
            for (let ste2 = 2; ste2 <= 30; ste2++) {
                $('#value_add_' + ste2 + '').css('display', 'none')
            }
        } else if (sampai == 2) {
            for (let step = 1; step <= 2; step++) {
                $('#value_add_' + step + '').css('display', 'block')
            }
            for (let ste2 = 3; ste2 <= 30; ste2++) {
                $('#value_add_' + ste2 + '').css('display', 'none')
            }
        } else if (sampai == 3) {
            for (let step = 1; step <= 4; step++) {
                $('#value_add_' + step + '').css('display', 'block')
            }
            for (let ste2 = 5; ste2 <= 30; ste2++) {
                $('#value_add_' + ste2 + '').css('display', 'none')
            }
        } else {
            for (let step = 10; step <= 1; step++) {
                $('#value_add_' + step + '').css('display', 'none')
            }
        }
    }

    function get_area() {
        var id_departemen = $('[name="id_departemen"]').val()
        $('[name="id_departemen"]').val(id_departemen)
        console.log(id_departemen);
        if (id_departemen == '') {
            var id_departemen = $('[name="id_departemen"]').val('')
            var id_area = $('[name="id_area"]').val('')
            var id_sub_area = $('[name="id_sub_area"]').val('')
            message('warning', 'Maaf Ada Kesalahan!', 'Maaf')
        } else {
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Filter_role/get_area') ?>/' + id_departemen,
                success: function(html) {
                    $("#get_area").html(html);
                }
            });
        }
    };

    function get_sub_area() {
        var id_area = $('[name="id_area"]').val()
        $('[name="id_area"]').val(id_area)
        console.log(id_area);
        if (id_area == '') {
            var id_departemen = $('[name="id_departemen"]').val('')
            var id_area = $('[name="id_area"]').val('')
            var id_sub_area = $('[name="id_sub_area"]').val('')
            message('warning', 'Maaf Ada Kesalahan!', 'Maaf')
        } else {
            $.ajax({
                type: 'GET',
                url: '<?= base_url('Filter_role/get_sub_area') ?>/' + id_area,
                success: function(html) {
                    $("#get_sub_area").html(html);
                }
            });
        }
    };


    function get_sub_sendiri() {
        var id_sub_area = $('[name="id_sub_area"]').val()
        $('[name="id_sub_area"]').val(id_sub_area)
    };



    function Filter_traking_hps() {
        var id_departemen = $('[name="id_departemen"]').val()
        var id_area = $('[name="id_area"]').val()
        var id_sub_area = $('[name="id_sub_area"]').val()
        var uraian = $('[name="uraian"]').val()
        $.ajax({
            method: "POST",
            url: "<?= base_url('traking_hps/traking_hps/search') ?>",
            data: {
                id_area: id_area,
                id_departemen: id_departemen,
                id_sub_area: id_sub_area,
                uraian: uraian
            },
            dataType: "JSON",
            success: function() {
                location.replace('<?= base_url('traking_hps/traking_hps/search') ?>');
            }
        })
    }
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
</script>