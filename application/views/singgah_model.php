<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?= base_url() ?>assets/ace/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?= base_url() ?>assets/ace/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if ('ontouchstart' in document.documentElement) document.write("<script src='<?= base_url() ?>assets/ace/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
</script>
<script src="<?= base_url() ?>assets/ace/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->
<script src="<?= base_url() ?>assets/ace/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/buttons.flash.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/buttons.colVis.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/dataTables.select.min.js"></script>

<script src="<?= base_url() ?>assets/ace/js/jquery-ui.custom.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.ui.touch-punch.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/chosen.jquery.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/spinbox.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/bootstrap-timepicker.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/moment.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/daterangepicker.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/bootstrap-colorpicker.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.knob.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/autosize.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.inputlimiter.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.maskedinput.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/bootstrap-tag.min.js"></script>

<script src="<?= base_url() ?>assets/ace/js/bootbox.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.easypiechart.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/jquery.gritter.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/spin.js"></script>

<!-- ace scripts -->
<script src="<?= base_url() ?>assets/ace/js/ace-elements.min.js"></script>
<script src="<?= base_url() ?>assets/ace/js/ace.min.js"></script>

<!-- inline scripts related to this page -->
<script>
    /* Fungsi formatRupiah */

    function warningMessage(title, icon, text) {
        swal({
            title: title,
            text: text,
            icon: icon,
        });
    }


    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    function filter_triwulan() {
        var data_triwulan = $('[name="data_triwulan"]').val();
        var tahun = $('[name="tahun"]').val();
        var tahun_akhir = $('[name="tahun_akhir"]').val();
        var ruang = $('[name="ruangan"]').val();
        var nm_lokasi = $('#nm_lokasi').val()
        var sts_terkini = $('[name="sts_terkini"]').val();

        if (tahun_akhir < tahun) {
            warningMessage('Silahkan Cek Kembali!', 'warning', 'Tahun Awal Melebihi Tahun Akhir!')
        } else {
            $.ajax({
                type: "POST",
                url: "<?= base_url('administrator/lap_keseluruhan/count_total_aset_dan_perolehan_tahun'); ?>",
                dataType: "JSON",
                data: {
                    tahun: tahun,
                    ruang: ruang,
                    tahun_akhir: tahun_akhir
                },
                success: function(response) {
                    jQuery(function($) {
                        //initiate dataTables plugin
                        var myTable =
                            $('#dynamic-table')
                            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                            .DataTable({
                                bAutoWidth: false,
                                // "aoColumns": [{
                                // 		"bSortable": true
                                // 	},
                                // 	null, null, null, null, null, null, null, null, null, null,
                                // 	{
                                // 		"bSortable": true
                                // 	}
                                // ],
                                "aaSorting": [],


                                //"bProcessing": true,
                                //"bServerSide": true,
                                //"sAjaxSource": "http://127.0.0.1/table.php"	,

                                //,
                                //"sScrollY": "200px",
                                //"bPaginate": false,

                                //"sScrollX": "100%",
                                //"sScrollXInner": "120%",
                                //"bScrollCollapse": true,
                                //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                                //you may want to wrap the table inside a "div.dataTables_borderWrap" element

                                "iDisplayLength": 5000,


                                select: {
                                    style: 'multi'
                                },
                                "destroy": true,
                                "responsive": true,
                                "autoWidth": true,
                                "processing": true,
                                "serverSide": true,
                                "order": [],
                                "ajax": {
                                    "url": "<?= base_url('administrator/lap_keseluruhan/getdata_pertahun/') ?>" + tahun + '/' + tahun_akhir + '/' + sts_terkini + '/' + ruang,
                                    "type": "POST"
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
                                    "sZeroRecords": "Tidak Ada Data Yang Di Cari",
                                    "sProcessing": "Memuat Data...."
                                }
                            });



                        $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

                        new $.fn.dataTable.Buttons(myTable, {
                            buttons: [{
                                    "extend": "colvis",
                                    "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                    "className": "btn btn-white btn-primary btn-bold",
                                    columns: ':not(:first):not(:last)'
                                },
                                {
                                    "extend": "copy",
                                    "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                },
                                {
                                    "extend": "csv",
                                    "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                },
                                {
                                    "extend": "excel",
                                    "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                },
                                {
                                    "extend": "pdf",
                                    "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                    "className": "btn btn-white btn-primary btn-bold"
                                },
                                {
                                    "extend": "print",
                                    "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                    "className": "btn btn-white btn-primary btn-bold",
                                    autoPrint: false,
                                    message: '<img src="<?= base_url('assets/image/logo22.png') ?>" alt="" style="width: 200px"><center> <h2 style="margin-left: 10px; margin-top: 10px">Laporan Aset PT. Jasamarga Tollroad Maintenance</h2><br><h2 style="margin-top: -10px">' + nm_lokasi + '</h2><br><h2 style="margin-top: -10px">Tahun ' + tahun_akhir + '</h2></center>'
                                }
                                // {
                                //     "extend": "print",
                                //     "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                //     "className": "btn btn-white btn-primary btn-bold",
                                //     autoPrint: false,
                                //     message: '<img src="<?= base_url('assets/image/logo22.png') ?>" alt="" style="width: 200px"><center> <h2 style="margin-left: 10px; margin-top: 10px">Laporan Aset PT. Jasamarga Tollroad Maintenance</h2><br><h2 style="margin-top: -10px">' + nm_lokasi + '</h2><br><h2 style="margin-top: -10px">Tahun ' + tahun + '</h2></center>' + '<div style="margin-left: 80%"><h5>Total Aset &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ' + response['count_aset'] + '</h5>' + '<h5>Nilai Peroleh : ' + formatRupiah(response.sum_perolehan.nilai_peroleh, 'Rp. ') + '</h5></div>'
                                // }
                            ]
                        });
                        myTable.buttons().container().appendTo($('.tableTools-container'));

                        //style the message box
                        var defaultCopyAction = myTable.button(1).action();
                        myTable.button(1).action(function(e, dt, button, config) {
                            defaultCopyAction(e, dt, button, config);
                            $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                        });


                        var defaultColvisAction = myTable.button(0).action();
                        myTable.button(0).action(function(e, dt, button, config) {

                            defaultColvisAction(e, dt, button, config);


                            if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                                $('.dt-button-collection')
                                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                    .find('a').attr('href', '#').wrap("<li />")
                            }
                            $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                        });

                        ////

                        setTimeout(function() {
                            $($('.tableTools-container')).find('a.dt-button').each(function() {
                                var div = $(this).find(' > div').first();
                                if (div.length == 1) div.tooltip({
                                    container: 'body',
                                    title: div.parent().text()
                                });
                                else $(this).tooltip({
                                    container: 'body',
                                    title: $(this).text()
                                });
                            });
                        }, 500);





                        myTable.on('select', function(e, dt, type, index) {
                            if (type === 'row') {
                                $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                            }
                        });
                        myTable.on('deselect', function(e, dt, type, index) {
                            if (type === 'row') {
                                $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                            }
                        });


                        /////////////////////////////////
                        //table checkboxes
                        $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                        //select/deselect all rows according to table header checkbox
                        $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function() {
                            var th_checked = this.checked; //checkbox inside "TH" table header

                            $('#dynamic-table').find('tbody > tr').each(function() {
                                var row = this;
                                if (th_checked) myTable.row(row).select();
                                else myTable.row(row).deselect();
                            });
                        });

                        //select/deselect a row when the checkbox is checked/unchecked
                        $('#dynamic-table').on('click', 'td input[type=checkbox]', function() {
                            var row = $(this).closest('tr').get(0);
                            if (this.checked) myTable.row(row).deselect();
                            else myTable.row(row).select();
                        });



                        $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                            e.stopImmediatePropagation();
                            e.stopPropagation();
                            e.preventDefault();
                        });



                        //And for the first simple table, which doesn't have TableTools or dataTables
                        //select/deselect all rows according to table header checkbox
                        var active_class = 'active';
                        $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function() {
                            var th_checked = this.checked; //checkbox inside "TH" table header

                            $(this).closest('table').find('tbody > tr').each(function() {
                                var row = this;
                                if (th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                                else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                            });
                        });

                        //select/deselect a row when the checkbox is checked/unchecked
                        $('#simple-table').on('click', 'td input[type=checkbox]', function() {
                            var $row = $(this).closest('tr');
                            if ($row.is('.detail-row ')) return;
                            if (this.checked) $row.addClass(active_class);
                            else $row.removeClass(active_class);
                        });



                        /********************************/
                        //add tooltip for small view action buttons in dropdown menu
                        $('[data-rel="tooltip"]').tooltip({
                            placement: tooltip_placement
                        });

                        //tooltip placement on right or left
                        function tooltip_placement(context, source) {
                            var $source = $(source);
                            var $parent = $source.closest('table')
                            var off1 = $parent.offset();
                            var w1 = $parent.width();

                            var off2 = $source.offset();
                            //var w2 = $source.width();

                            if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2)) return 'right';
                            return 'left';
                        }




                        /***************/
                        $('.show-details-btn').on('click', function(e) {
                            e.preventDefault();
                            $(this).closest('tr').next().toggleClass('open');
                            $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                        });
                        /***************/





                        /**
                        //add horizontal scrollbars to a simple table
                        $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                          {
                        	horizontal: true,
                        	styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                        	size: 2000,
                        	mouseWheelLock: true
                          }
                        ).css('padding-top', '12px');
                        */


                    })
                }
            })
        }


    }
</script>
<script type="text/javascript">
    jQuery(function($) {
        $('#id-disable-check').on('click', function() {
            var inp = $('#form-input-readonly').get(0);
            if (inp.hasAttribute('disabled')) {
                inp.setAttribute('readonly', 'true');
                inp.removeAttribute('disabled');
                inp.value = "This text field is readonly!";
            } else {
                inp.setAttribute('disabled', 'disabled');
                inp.removeAttribute('readonly');
                inp.value = "This text field is disabled!";
            }
        });


        if (!ace.vars['touch']) {
            $('.chosen-select').chosen({
                allow_single_deselect: true
            });
            //resize the chosen on window resize

            $(window)
                .off('resize.chosen')
                .on('resize.chosen', function() {
                    $('.chosen-select').each(function() {
                        var $this = $(this);
                        $this.next().css({
                            'width': $this.parent().width()
                        });
                    })
                }).trigger('resize.chosen');
            //resize chosen on sidebar collapse/expand
            $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                if (event_name != 'sidebar_collapsed') return;
                $('.chosen-select').each(function() {
                    var $this = $(this);
                    $this.next().css({
                        'width': $this.parent().width()
                    });
                })
            });


            $('#chosen-multiple-style .btn').on('click', function(e) {
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });
        }


        $('[data-rel=tooltip]').tooltip({
            container: 'body'
        });
        $('[data-rel=popover]').popover({
            container: 'body'
        });

        autosize($('textarea[class*=autosize]'));

        $('textarea.limited').inputlimiter({
            remText: '%n character%s remaining...',
            limitText: 'max allowed : %n.'
        });

        $.mask.definitions['~'] = '[+-]';
        $('.input-mask-date').mask('99/99/9999');
        $('.input-mask-phone').mask('(999) 999-9999');
        $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
        $(".input-mask-product").mask("a*-999-a999", {
            placeholder: " ",
            completed: function() {
                alert("You typed the following: " + this.val());
            }
        });



        $("#input-size-slider").css('width', '200px').slider({
            value: 1,
            range: "min",
            min: 1,
            max: 8,
            step: 1,
            slide: function(event, ui) {
                var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                var val = parseInt(ui.value);
                $('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.' + sizing[val]);
            }
        });

        $("#input-span-slider").slider({
            value: 1,
            range: "min",
            min: 1,
            max: 12,
            step: 1,
            slide: function(event, ui) {
                var val = parseInt(ui.value);
                $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
            }
        });



        //"jQuery UI Slider"
        //range slider tooltip example
        $("#slider-range").css('height', '200px').slider({
            orientation: "vertical",
            range: true,
            min: 0,
            max: 100,
            values: [17, 67],
            slide: function(event, ui) {
                var val = ui.values[$(ui.handle).index() - 1] + "";

                if (!ui.handle.firstChild) {
                    $("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                        .prependTo(ui.handle);
                }
                $(ui.handle.firstChild).show().children().eq(1).text(val);
            }
        }).find('span.ui-slider-handle').on('blur', function() {
            $(this.firstChild).hide();
        });


        $("#slider-range-max").slider({
            range: "max",
            min: 1,
            max: 10,
            value: 2
        });

        $("#slider-eq > span").css({
            width: '90%',
            'float': 'left',
            margin: '15px'
        }).each(function() {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true

            });
        });

        $("#slider-eq > span.ui-slider-purple").slider('disable'); //disable third item


        $('#id-input-file-1 , #id-input-file-2').ace_file_input({
            no_file: 'No File ...',
            btn_choose: 'Choose',
            btn_change: 'Change',
            droppable: false,
            onchange: null,
            thumbnail: false //| true | large
            //whitelist:'gif|png|jpg|jpeg'
            //blacklist:'exe|php'
            //onchange:''
            //
        });
        //pre-show a file name, for example a previously selected file
        //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])


        $('#id-input-file-3').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'small' //large | fit
                //,icon_remove:null//set null, to hide remove/reset button
                /**,before_change:function(files, dropped) {
                	//Check an example below
                	//or examples/file-upload.html
                	return true;
                }*/
                /**,before_remove : function() {
                	return true;
                }*/
                ,
            preview_error: function(filename, error_code) {
                //name of the file that failed
                //error_code values
                //1 = 'FILE_LOAD_FAILED',
                //2 = 'IMAGE_LOAD_FAILED',
                //3 = 'THUMBNAIL_FAILED'
                //alert(error_code);
            }

        }).on('change', function() {
            //console.log($(this).data('ace_input_files'));
            //console.log($(this).data('ace_input_method'));
        });


        //$('#id-input-file-3')
        //.ace_file_input('show_file_list', [
        //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
        //{type: 'file', name: 'hello.txt'}
        //]);




        //dynamically change allowed formats by changing allowExt && allowMime function
        $('#id-file-format').removeAttr('checked').on('change', function() {
            var whitelist_ext, whitelist_mime;
            var btn_choose
            var no_icon
            if (this.checked) {
                btn_choose = "Drop images here or click to choose";
                no_icon = "ace-icon fa fa-picture-o";

                whitelist_ext = ["jpeg", "jpg", "png", "gif", "bmp"];
                whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
            } else {
                btn_choose = "Drop files here or click to choose";
                no_icon = "ace-icon fa fa-cloud-upload";

                whitelist_ext = null; //all extensions are acceptable
                whitelist_mime = null; //all mimes are acceptable
            }
            var file_input = $('#id-input-file-3');
            file_input
                .ace_file_input('update_settings', {
                    'btn_choose': btn_choose,
                    'no_icon': no_icon,
                    'allowExt': whitelist_ext,
                    'allowMime': whitelist_mime
                })
            file_input.ace_file_input('reset_input');

            file_input
                .off('file.error.ace')
                .on('file.error.ace', function(e, info) {
                    //console.log(info.file_count);//number of selected files
                    //console.log(info.invalid_count);//number of invalid files
                    //console.log(info.error_list);//a list of errors in the following format

                    //info.error_count['ext']
                    //info.error_count['mime']
                    //info.error_count['size']

                    //info.error_list['ext']  = [list of file names with invalid extension]
                    //info.error_list['mime'] = [list of file names with invalid mimetype]
                    //info.error_list['size'] = [list of file names with invalid size]


                    /**
                    if( !info.dropped ) {
                    	//perhapse reset file field if files have been selected, and there are invalid files among them
                    	//when files are dropped, only valid files will be added to our file array
                    	e.preventDefault();//it will rest input
                    }
                    */


                    //if files have been selected (not dropped), you can choose to reset input
                    //because browser keeps all selected files anyway and this cannot be changed
                    //we can only reset file field to become empty again
                    //on any case you still should check files with your server side script
                    //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                });


            /**
            file_input
            .off('file.preview.ace')
            .on('file.preview.ace', function(e, info) {
            	console.log(info.file.width);
            	console.log(info.file.height);
            	e.preventDefault();//to prevent preview
            });
            */

        });

        $('#spinner1').ace_spinner({
                value: 0,
                min: 0,
                max: 200,
                step: 10,
                btn_up_class: 'btn-info',
                btn_down_class: 'btn-info'
            })
            .closest('.ace-spinner')
            .on('changed.fu.spinbox', function() {
                //console.log($('#spinner1').val())
            });
        $('#spinner2').ace_spinner({
            value: 0,
            min: 0,
            max: 10000,
            step: 100,
            touch_spinner: true,
            icon_up: 'ace-icon fa fa-caret-up bigger-110',
            icon_down: 'ace-icon fa fa-caret-down bigger-110'
        });
        $('#spinner3').ace_spinner({
            value: 0,
            min: -100,
            max: 100,
            step: 10,
            on_sides: true,
            icon_up: 'ace-icon fa fa-plus bigger-110',
            icon_down: 'ace-icon fa fa-minus bigger-110',
            btn_up_class: 'btn-success',
            btn_down_class: 'btn-danger'
        });
        $('#spinner4').ace_spinner({
            value: 0,
            min: -100,
            max: 100,
            step: 10,
            on_sides: true,
            icon_up: 'ace-icon fa fa-plus',
            icon_down: 'ace-icon fa fa-minus',
            btn_up_class: 'btn-purple',
            btn_down_class: 'btn-purple'
        });

        //$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
        //or
        //$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
        //$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0


        //datepicker plugin
        //link
        $('.date-picker').datepicker({
                autoclose: true,
                todayHighlight: true
            })
            //show datepicker when clicking on the icon
            .next().on(ace.click_event, function() {
                $(this).prev().focus();
            });

        //or change it into a date range picker
        $('.input-daterange').datepicker({
            autoclose: true
        });


        //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
        $('input[name=date-range-picker]').daterangepicker({
                'applyClass': 'btn-sm btn-success',
                'cancelClass': 'btn-sm btn-default',
                locale: {
                    applyLabel: 'Apply',
                    cancelLabel: 'Cancel',
                }
            })
            .prev().on(ace.click_event, function() {
                $(this).next().focus();
            });


        $('#timepicker1').timepicker({
            minuteStep: 1,
            showSeconds: true,
            showMeridian: false,
            disableFocus: true,
            icons: {
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down'
            }
        }).on('focus', function() {
            $('#timepicker1').timepicker('showWidget');
        }).next().on(ace.click_event, function() {
            $(this).prev().focus();
        });




        if (!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
            //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
            icons: {
                time: 'fa fa-clock-o',
                date: 'fa fa-calendar',
                up: 'fa fa-chevron-up',
                down: 'fa fa-chevron-down',
                previous: 'fa fa-chevron-left',
                next: 'fa fa-chevron-right',
                today: 'fa fa-arrows ',
                clear: 'fa fa-trash',
                close: 'fa fa-times'
            }
        }).next().on(ace.click_event, function() {
            $(this).prev().focus();
        });


        $('#colorpicker1').colorpicker();
        //$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe

        $('#simple-colorpicker-1').ace_colorpicker();
        //$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
        //$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
        //var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
        //picker.pick('red', true);//insert the color if it doesn't exist


        $(".knob").knob();


        var tag_input = $('#form-field-tags');
        try {
            tag_input.tag({
                placeholder: tag_input.attr('placeholder'),
                //enable typeahead by specifying the source array
                source: ace.vars['US_STATES'], //defined in ace.js >> ace.enable_search_ahead
                /**
                //or fetch data from database, fetch those that match "query"
                source: function(query, process) {
                  $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
                  .done(function(result_items){
                	process(result_items);
                  });
                }
                */
            })

            //programmatically add/remove a tag
            var $tag_obj = $('#form-field-tags').data('tag');
            $tag_obj.add('Programmatically Added');

            var index = $tag_obj.inValues('some tag');
            $tag_obj.remove(index);
        } catch (e) {
            //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
            tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
            //autosize($('#form-field-tags'));
        }


        /////////
        $('#modal-input input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        })

        //chosen plugin inside a modal will have a zero width because the select element is originally hidden
        //and its width cannot be determined.
        //so we set the width after modal is show
        $('#modal-input').on('shown.bs.modal', function() {
            if (!ace.vars['touch']) {
                $(this).find('.chosen-container').each(function() {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            }
        })
        /**
        //or you can activate the chosen plugin after modal is shown
        //this way select element becomes visible with dimensions and chosen works as expected
        $('#modal-form').on('shown', function () {
        	$(this).find('.modal-chosen').chosen();
        })
        */
        $('#modal-detail input[type=file]').ace_file_input({
            style: 'well',
            btn_choose: 'Drop files here or click to choose',
            btn_change: null,
            no_icon: 'ace-icon fa fa-cloud-upload',
            droppable: true,
            thumbnail: 'large'
        })

        $('#modal-detail').on('shown.bs.modal', function() {
            if (!ace.vars['touch']) {
                $(this).find('.chosen-container').each(function() {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            }
        })


        $(document).one('ajaxloadstart.page', function(e) {
            autosize.destroy('textarea[class*=autosize]')

            $('.limiterBox,.autosizejs').remove();
            $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
        });

    });
</script>

<script type="text/javascript">
    jQuery(function($) {
        /**
        $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          //console.log(e.target.getAttribute("href"));
        })
        	
        $('#accordion').on('shown.bs.collapse', function (e) {
        	//console.log($(e.target).is('#collapseTwo'))
        });
        */

        $('#myTab a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
            //if($(e.target).attr('href') == "#home") doSomethingNow();
        })


        /**
        	//go to next tab, without user clicking
        	$('#myTab > .active').next().find('> a').trigger('click');
        */


        $('#accordion-style').on('click', function(ev) {
            var target = $('input', ev.target);
            var which = parseInt(target.val());
            if (which == 2) $('#accordion').addClass('accordion-style2');
            else $('#accordion').removeClass('accordion-style2');
        });

        //$('[href="#collapseTwo"]').trigger('click');


        $('.easy-pie-chart.percentage').each(function() {
            $(this).easyPieChart({
                barColor: $(this).data('color'),
                trackColor: '#EEEEEE',
                scaleColor: false,
                lineCap: 'butt',
                lineWidth: 8,
                animate: ace.vars['old_ie'] ? false : 1000,
                size: 75
            }).css('color', $(this).data('color'));
        });

        $('[data-rel=tooltip]').tooltip();
        $('[data-rel=popover]').popover({
            html: true
        });


        $('#gritter-regular').on(ace.click_event, function() {
            $.gritter.add({
                title: 'This is a regular notice!',
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="blue">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                image: 'assets/images/avatars/avatar1.png', //in Ace demo ./dist will be replaced by correct assets path
                sticky: false,
                time: '',
                class_name: (!$('#gritter-light').get(0).checked ? 'gritter-light' : '')
            });

            return false;
        });

        $('#gritter-sticky').on(ace.click_event, function() {
            var unique_id = $.gritter.add({
                title: 'This is a sticky notice!',
                text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="red">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                image: 'assets/images/avatars/avatar.png',
                sticky: true,
                time: '',
                class_name: 'gritter-info' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $('#gritter-without-image').on(ace.click_event, function() {
            $.gritter.add({
                // (string | mandatory) the heading of the notification
                title: 'This is a notice without an image!',
                // (string | mandatory) the text inside the notification
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="orange">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                class_name: 'gritter-success' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $('#gritter-max3').on(ace.click_event, function() {
            $.gritter.add({
                title: 'This is a notice with a max of 3 on screen at one time!',
                text: 'This will fade out after a certain amount of time. Vivamus eget tincidunt velit. Cum sociis natoque penatibus et <a href="#" class="green">magnis dis parturient</a> montes, nascetur ridiculus mus.',
                image: 'assets/images/avatars/avatar3.png', //in Ace demo ./dist will be replaced by correct assets path
                sticky: false,
                before_open: function() {
                    if ($('.gritter-item-wrapper').length >= 3) {
                        return false;
                    }
                },
                class_name: 'gritter-warning' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $('#gritter-center').on(ace.click_event, function() {
            $.gritter.add({
                title: 'This is a centered notification',
                text: 'Just add a "gritter-center" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                class_name: 'gritter-info gritter-center' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });

        $('#gritter-error').on(ace.click_event, function() {
            $.gritter.add({
                title: 'This is a warning notification',
                text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
                class_name: 'gritter-error' + (!$('#gritter-light').get(0).checked ? ' gritter-light' : '')
            });

            return false;
        });


        $("#gritter-remove").on(ace.click_event, function() {
            $.gritter.removeAll();
            return false;
        });


        ///////


        $("#bootbox-regular").on(ace.click_event, function() {
            bootbox.prompt("What is your name?", function(result) {
                if (result === null) {

                } else {

                }
            });
        });

        $("#bootbox-confirm").on(ace.click_event, function() {
            bootbox.confirm("Are you sure?", function(result) {
                if (result) {
                    //
                }
            });
        });

        /**
        	$("#bootbox-confirm").on(ace.click_event, function() {
        		bootbox.confirm({
        			message: "Are you sure?",
        			buttons: {
        			  confirm: {
        				 label: "OK",
        				 className: "btn-primary btn-sm",
        			  },
        			  cancel: {
        				 label: "Cancel",
        				 className: "btn-sm",
        			  }
        			},
        			callback: function(result) {
        				if(result) alert(1)
        			}
        		  }
        		);
        	});
        **/


        $("#bootbox-options").on(ace.click_event, function() {
            bootbox.dialog({
                message: "<span class='bigger-110'>I am a custom dialog with smaller buttons</span>",
                buttons: {
                    "success": {
                        "label": "<i class='ace-icon fa fa-check'></i> Success!",
                        "className": "btn-sm btn-success",
                        "callback": function() {
                            //Example.show("great success");
                        }
                    },
                    "danger": {
                        "label": "Danger!",
                        "className": "btn-sm btn-danger",
                        "callback": function() {
                            //Example.show("uh oh, look out!");
                        }
                    },
                    "click": {
                        "label": "Click ME!",
                        "className": "btn-sm btn-primary",
                        "callback": function() {
                            //Example.show("Primary button");
                        }
                    },
                    "button": {
                        "label": "Just a button...",
                        "className": "btn-sm"
                    }
                }
            });
        });



        $('#spinner-opts small').css({
            display: 'inline-block',
            width: '60px'
        })

        var slide_styles = ['', 'green', 'red', 'purple', 'orange', 'dark'];
        var ii = 0;
        $("#spinner-opts input[type=text]").each(function() {
            var $this = $(this);
            $this.hide().after('<span />');
            $this.next().addClass('ui-slider-small').
            addClass("inline ui-slider-" + slide_styles[ii++ % slide_styles.length]).
            css('width', '125px').slider({
                value: parseInt($this.val()),
                range: "min",
                animate: true,
                min: parseInt($this.attr('data-min')),
                max: parseInt($this.attr('data-max')),
                step: parseFloat($this.attr('data-step')) || 1,
                slide: function(event, ui) {
                    $this.val(ui.value);
                    spinner_update();
                }
            });
        });



        //CSS3 spinner
        $.fn.spin = function(opts) {
            this.each(function() {
                var $this = $(this),
                    data = $this.data();

                if (data.spinner) {
                    data.spinner.stop();
                    delete data.spinner;
                }
                if (opts !== false) {
                    data.spinner = new Spinner($.extend({
                        color: $this.css('color')
                    }, opts)).spin(this);
                }
            });
            return this;
        };

        function spinner_update() {
            var opts = {};
            $('#spinner-opts input[type=text]').each(function() {
                opts[this.name] = parseFloat(this.value);
            });
            opts['left'] = 'auto';
            $('#spinner-preview').spin(opts);
        }



        $('#id-pills-stacked').removeAttr('checked').on('click', function() {
            $('.nav-pills').toggleClass('nav-stacked');
        });






        ///////////
        $(document).one('ajaxloadstart.page', function(e) {
            $.gritter.removeAll();
            $('.modal').modal('hide');
        });

    });
</script>
<script>
    function get_nama_lokasi() {
        var ruang = $('[name="ruangan"]').val();
        var kd_lokasi = $('#nama_lokasi').val(ruang)
        var kd_lokasi2 = $('[name="nama_lokasi"]').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('administrator/data_lokasi/byid/') ?>" + kd_lokasi2,
            dataType: "JSON",

            success: function(response) {
                var nm_lokasi = $('#nm_lokasi').val(response.nm_lokasi)
            }


        })
    }
</script>
<!-- INI FILTER UNTUK TRIWULAN -->


</body>

</html>