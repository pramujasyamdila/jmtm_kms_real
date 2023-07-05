<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "ordering": false,
            "info": true,
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copyHtml5',
                    text: '<i class="fas fa-file"> Copy</i>',
                    titleAttr: 'Copy'
                },
                {
                    extend: 'excelHtml5',
                    text: '<i class="fas fa-file-excel"> Excel</i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'csvHtml5',
                    text: '<i class="fas fa-file"> Csv</i>',
                    titleAttr: 'CSV'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fas fa-file-pdf"> Pdf</i>',
                    titleAttr: 'PDF'
                }
            ]
        });
    });
</script>

<script>
    function get_area2() {
        var id_departemen = $('[name="id_departemen"]').val()
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

    function get_sub_area2() {
        var id_area = $('[name="id_area"]').val()
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

    function get_area1() {
        var id_departemen = $('[name="id_departemen"]').val()
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

    function get_sub_area1() {
        var id_area = $('[name="id_area"]').val()
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

    function get_sub_area3() {
        var id_area = $('[name="id_area"]').val()
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
</script>