<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nota Dinas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body style="font-size: 13px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="https://jmtm.co.id/assets/img_jmtm/logo.png" alt="" width="300px" style="margin-top:50px">
            </div>
        </div><br><br>
        <input type="hidden" name="type_hps_number" value="1">
        <input type="hidden" name="id_detail_program_penyedia_jasa" value="<?= $id_detail_program_penyedia_jasa ?>">
        <center>
            <h2>NOTA DINAS</h2>
        </center>
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Nomor</label>
            </div>
            <div class="col-md-1">
                <label for="" style="margin-right: auto;"> :</label>
            </div>
            <div class="col-md-4">
                <label for="" style="margin-left: -90px;"><?= $row_program_detail['no_surat_nota_dinas'] ?></label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <label><?= $row_program_detail['tgl_surat_nota_dinas'] ?></label>

            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Lampiran</label>
            </div>
            <div class="col-md-1">
                <label for="" style="margin-right: auto;"> :</label>
            </div>
            <div class="col-md-4">
                <label for="" style="margin-left: -90px;">Lampiran : 1 (Satu) Berkas</label>
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Perihal</label>
            </div>
            <div class="col-md-11">
                <label for="" style="margin-left: auto;">
                    : <b> Permohonan Pelaksanaan Pengadaan <label for=""><?= $row_program_detail['jenis_pengadaan'] ?></label> <label for=""><?= $row_program_detail['nama_pekerjaan_program_mata_anggaran'] ?></label> </b></b>
                </label>
            </div>
        </div>
        <div class="row" style="margin-top: -8px;">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Yth</label>
            </div>
            <div class="col-md-11">
                <label for="" style="margin-left: auto;">
                    : <b>Procurement General Manager </b></b>
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <label for="" style="margin-right: auto;">Dari</label>
            </div>
            <div class="col-md-11">
                <label for="" style="margin-left: auto;">
                    : <b><?= $row_program_detail['jabatan_pengirim_nota_dinas']  ?></b></b>
                </label>
            </div>
        </div>

        <hr color="black">

        <div class="mt-3">
            Berdasarkan :
        </div>
        <div>
            Diambil dari alasan administrasi
            <br>
            <?php
            foreach ($data_administrasi as $value) { ?>
                <div class="row">
                    <div class="col-md-1">
                        <?= $i + 1 ?>.&ensp;
                    </div>
                    <div class="col-md-11" style="margin-left:-80px">
                        <?= $value['nama_alasan'] ?>
                    </div>
                </div>

                <?php $no_terakhir = count($data_administrasi); ?>
            <?php }  ?>
            <div class="row">
                <div class="col-md-1">
                    <?= $no_terakhir + 1 ?>. &ensp;
                </div>
                <div class="col-md-11" style="margin-left:-80px">
                    Persetujuan Izin Prinsip dan Harga Perkiraan Sendiri (HPS) untuk pekerjaan-pekerjaan berikut :
                </div>
            </div>

        </div>

        <br>
        <table class="table table-bordered" style="width:100%">
            <thead style="background-color:#e7e6e6">
                <tr>
                    <th>
                        No.
                    </th>
                    <th>
                        Nama Pekerjaan
                    </th>
                    <th>
                        Nilai HPS
                        (Rp)
                        (setelah PPN)
                    </th>
                    <th>
                        Perkiraan Waktu Pelaksanaan
                    </th>
                    <th>
                        Jangka Waktu Pemeliharaan
                    </th>
                </tr>
            </thead>
            <?php

            $total_pagu = 0;
            $total_hps = 0;
            ?>
            <?php foreach ($result_sub_program as $key => $value) { ?>

                <?php
                $total_pagu += $value['nilai_program_mata_anggran'];
                $total_hps += $value['nilai_hps'];
                ?>
            <?php  } ?>
            <tbody>
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        <?= $row_program_detail['nama_pekerjaan_program_mata_anggaran']  ?>
                    </td>
                    <td>
                        <?= number_format($total_hps, 2, ',', '.'); ?>
                    </td>
                    <td>
                        <?= $row_program_detail['waktu_pelaksanaan_pip'] ?> Hari Kalender
                    </td>
                    <td>
                        <?= $row_program_detail['waktu_pemeliharaan_pip'] ?> Hari Kalender
                    </td>

                </tr>
            </tbody>

        </table>
        <div class="mt-4">
            <div class="row">
                <div class="col-md-12">
                    Bersama ini kami mohon agar dapat dilakukan proses pengadaan atas Pekerjaan dimaksud. Demikian kami sampaikan, atas perhatian dan kerjasama yang baik, diucapkan terima kasih.
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <center>
                    <br>
                    <br>
                    <br><br><br><br>
                    <h5> <u style="text-transform: capitalize;"><?= $row_program_detail['pengirim_nota_dinas'] ?></u></h5>
                    <h5><?= $row_program_detail['jabatan_pengirim_nota_dinas']   ?>
                    </h5>

                </center>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <br>
                <br>
                <br><br><br><br>
                <label>Tembusan, Yth : </label>
                <br>
                <label>Direktur Operasi (sebagai laporan) </label>

            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">

            </div>
        </div>

    </div>


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard2.js"></script> -->

    <!-- Select2 -->
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="<?php echo base_url() ?>assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="<?php echo base_url() ?>assets/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>
    <!-- Scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = "";
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function(file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function() {
                myDropzone.enqueueFile(file)
            }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function(progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function(file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function(progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function() {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function() {
            myDropzone.removeAllFiles(true)
        }
        // DropzoneJS Demo Code End
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // window.print();


        Kelola_surat()


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
    </script>

</body>

</html>