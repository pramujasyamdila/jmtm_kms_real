<script>
    // sweetalert
    function message(icon, text, title) {
        Swal.fire({
            title: title,
            text: text,
            icon: icon,
        });
    }
    var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)

    function cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa) {
        $('.create_mcku').css('display', 'block');
        var tbl_adendum = $('#tbl_adendum');
        if (id_detail_program_penyedia_jasa == '') {
            message('No. Kontrak Belum Di isi!', 'warning', 'Gagal Mendapatkan Data!')
        } else {
            $.ajax({
                method: "POST",
                url: '<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_detail_program_penyedia_jasa/'); ?>' + id_detail_program_penyedia_jasa,
                dataType: "JSON",
                success: function(response) {

                    // ini untuk random kode
                    $('#no_urut_mc').text('Nomor Mc Ke' + response['no_urut_mc']);
                    if (response['jika_ada_um']) {
                        $('#jika_ada_um').css('display', 'block');
                        $('#jika_tidak_ada_um').css('display', 'none');
                        $('[name="jika_no_urut"]').val('Nomor Mc Ke ' + response['no_urut_mc']);
                        $('#header_no_mc').html('Nomor Mc Ke ' + response['no_urut_mc']);
                        $('[name="cek_um"]').val('tidak ada');
                    } else {
                        $('#jika_ada_um').css('display', 'none');
                        $('#jika_tidak_ada_um').css('display', 'block');
                    }
                    $('[name="id_detail_program_penyedia_jasau"]').val(id_detail_program_penyedia_jasa);
                    // var rpdata = 'Rp. ' + response['nilai_kontrak']['nilai_hps'].toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00';
                    // $('[name="total_kontrak"]').val(rpdata);
                    // $('[name="tanggal_kontrak"]').val(response['datakontrak'].tanggal_kontrak);


                    if (response['cek_pertama_mc_apa'].no_mc == 'um') {
                        $('[name="jumlah_mcku"]').val(response['selact_max2'].sd_bulan_ini);
                    } else if (response['cek_pertama_mc_apa'].no_mc == 1) {
                        $('[name="jumlah_mcku"]').val(response['selact_max2'].sd_bulan_ini);
                    } else {
                        $('[name="jumlah_mcku"]').val(response['selact_max2'].sd_bulan_ini);
                    }



                    // -------INI UNTUK GET DETAIL KONTRAK -------------
                    var html = '';
                    var i;
                    var start = response.start;
                    for (i = 0; i < response['get_detail_taggihan'].length; ++i) {
                        // logika bulan ini di sini
                        if (response['get_detail_taggihan'][i].no_mc == 'um') {
                            var mc = 'Um'
                        } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                            var mc = response['get_detail_taggihan'][i].no_mc
                        } else {
                            var mc = response['get_detail_taggihan'][i].no_mc
                        }


                        //   logika hasil bulan lalu
                        var hasil_bulan_lalu = response['get_detail_taggihan'][i].sd_bulan_lalu;
                        var hasil_jumlah_mc = response['get_detail_taggihan'][i].jumlah_mc;
                        if (response['get_detail_taggihan'][i].no_mc == 'um') {
                            var sd_bulan_lalu = 'Rp. ' + hasil_bulan_lalu.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                            var sd_bulan_lalu = 'Rp. ' + hasil_bulan_lalu.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        } else {
                            var sd_bulan_lalu = 'Rp. ' + hasil_bulan_lalu.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        }

                        if (response['get_detail_taggihan'][i].no_mc == 'um') {
                            var bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                            var bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        } else {
                            var bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        }

                        if (response['get_detail_taggihan'][i].no_mc == 'um') {
                            var sd_bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].sd_bulan_ini.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        } else if (response['get_detail_taggihan'][i].no_mc == '1') {
                            var sd_bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].sd_bulan_ini.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        } else {
                            var sd_bulan_ini = 'Rp. ' + response['get_detail_taggihan'][i].sd_bulan_ini.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00'
                        }

                        if (response['get_detail_taggihan'][0].no_mc == 'um') {
                            if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                var nama_pekerjaan_program_mata_anggaran = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_pekerjaan_program_mata_anggaran + '</td>'
                            } else {
                                var nama_pekerjaan_program_mata_anggaran = ''
                            }
                            if (response['get_detail_taggihan'][i].no_mc == 'um') {
                                var nama_vendor = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_vendor + '</td>'
                            } else {
                                var nama_vendor = ''
                            }


                        } else {
                            if (response['get_detail_taggihan'][i].no_mc == '1') {
                                var nama_pekerjaan_program_mata_anggaran = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_pekerjaan_program_mata_anggaran + '</td>'
                            } else {
                                var nama_pekerjaan_program_mata_anggaran = ''
                            }
                            if (response['get_detail_taggihan'][i].no_mc == '1') {
                                var nama_vendor = '<td style="font-size:12px" class = "tg-d2hi" rowspan = "' + response['total_kontrak'].total + '">' + response['get_detail_taggihan'][i].nama_vendor + '</td>'
                            } else {
                                var nama_vendor = ''
                            }
                        }


                        if (response['get_detail_taggihan'][i].status_penaggihan == 1) {
                            var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-sm btn-block btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a>'
                        } else {
                            if (response['get_detail_taggihan'][i].status_penaggihan == 2 || response['get_detail_taggihan'][i].status_terakhir == 'Pencairan') {
                                if (response['get_detail_taggihan'][i].status_pencairan == 1) {
                                    var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-block btn-sm btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a><a style="font-size:10px" class="btn btn-block btn-sm btn-secondary text-white" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/dokumen_mc/') ?>' + response['get_detail_taggihan'][i].id_mc + '"><i class="fa fa-file" aria-hidden="true"></i> Dokumen Taggihan</a><a style="font-size:10px" class="btn btn-block btn-sm btn-danger text-white" onclick="Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Mc</a>'
                                } else {
                                    var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-block btn-sm btn-success text-white" onclick="Pencairan(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-credit-card" aria-hidden="true"></i> Pencairan</a> <a style="font-size:10px" class="btn btn-block btn-sm btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a><a style="font-size:10px" class="btn btn-block btn-sm btn-secondary text-white" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/dokumen_mc/') ?>' + response['get_detail_taggihan'][i].id_mc + '"><i class="fa fa-file" aria-hidden="true"></i> Dokumen Taggihan</a><a style="font-size:10px" class="btn btn-block btn-sm btn-danger text-white" onclick="Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Mc</a>'
                                }
                            } else {
                                var action = '<a style="font-size:10px" class="btn btn-sm btn-block btn-primary text-white" onclick="Traking_area2(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-eye" aria-hidden="true"></i> View Traking</a><a style="font-size:10px" class="btn btn-sm btn-block btn-warning text-white" onclick="Edit_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-cog" aria-hidden="true"></i> Kelola Mc</a><a style="font-size:10px" class="btn btn-block btn-sm btn-secondary text-white" href="<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/dokumen_mc/') ?>' + response['get_detail_taggihan'][i].id_mc + '"><i class="fa fa-file" aria-hidden="true"></i> Dokumen Taggihan</a><a style="font-size:10px" class="btn btn-block btn-sm btn-danger text-white" onclick="Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')" href="javascript:;"><i class="fa fa-trash" aria-hidden="true"></i> Hapus Mc</a>'
                            }
                        }

                        // nilai setelah ppn

                        if (response['get_detail_taggihan'][i].status_terakhir) {
                            if (response['get_detail_taggihan'][i].status_pencairan == 1) {
                                var sts_trakhir = '<label style="font-size:10px" class="badge badge-sm badge-success text-white">Sudah Dicairkan</label>';
                            } else {
                                var sts_trakhir = response['get_detail_taggihan'][i].status_terakhir;
                            }

                        } else {
                            var sts_trakhir = 'Belum Update';
                        }

                        if (response['get_detail_taggihan'][i].sts_tanggal_trakhir) {
                            var tanggal_trakhir = response['get_detail_taggihan'][i].sts_tanggal_trakhir;
                        } else {
                            var tanggal_trakhir = 'Belum Update';
                        }

                        // logika retensi
                        if (response['get_detail_taggihan'][i].sts_retensi == 1) {
                            var nilai_retensi = response['get_detail_taggihan'][i].nilai_retensi;
                        } else {
                            var persen_retensi = response['get_detail_taggihan'][i].nilai_retensi;
                            if (persen_retensi == 5) {
                                var nilai_retensi = response['get_detail_taggihan'][i].jumlah_mc * 0.05;
                            } else if (persen_retensi == 10) {
                                var nilai_retensi = response['get_detail_taggihan'][i].jumlah_mc * 0.10;
                            } else {
                                var nilai_retensi = response['get_detail_taggihan'][i].jumlah_mc * 0.15;
                            }
                        }

                        var total_sd_setelah_ppn = parseInt(response['get_detail_taggihan'][i].sd_bulan_lalu) + parseInt(response['get_detail_taggihan'][i].setelah_ppn);

                        // logika potongan
                        var total_potongan = parseInt(nilai_retensi) + parseInt(response['get_detail_taggihan'][i].nilai_uang_muka) + parseInt(response['get_detail_taggihan'][i].denda);
                        var total_invoice = parseInt(total_sd_setelah_ppn) - parseInt(nilai_retensi);
                        html +=
                            '<tr style="font-size:12px">' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + response['get_detail_taggihan'][i].no_mc_manipulasi + '</td>' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + response['get_detail_taggihan'][i].tanggal_mc + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + sd_bulan_lalu + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + bulan_ini + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + sd_bulan_ini + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].ppn_total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + sd_bulan_lalu + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].setelah_ppn.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + total_sd_setelah_ppn.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + nilai_retensi.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].nilai_uang_muka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi"> ' + 'Rp. ' + response['get_detail_taggihan'][i].denda.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + 'Rp. ' + total_potongan.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + 'Rp. ' + total_invoice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00' + '</td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + sts_trakhir + '</td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + tanggal_trakhir + ' </td> ' +
                            '<td style="font-size:12px" class = "tg-d2hi">' + action + '</td> ' +
                            '</tr>';
                    }
                    $('.result_datanya').html(html);
                    //   $('#pagination_link').html(response.pagination_link);
                },
                error: function() {
                    console.log(error);
                }
            })

            $(document).ready(function() {
                tbl_adendum.DataTable({
                    "responsive": true,
                    "autoWidth": false,
                    "processing": true,
                    "serverSide": true,
                    "searching": true,
                    "bDestroy": true,
                    "info": false,
                    "order": [],
                    "ajax": {
                        "url": "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_seacrh_dendum_by_kontrak/') ?>" + id_detail_program_penyedia_jasa,
                        "type": "POST",
                    },
                    "oLanguage": {
                        "sSearch": "Cari Data : ",
                        "sEmptyTable": "Data Tidak Tersedia",
                        "sLoadingRecords": "Silahkan Tunggu - loading...",
                        "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                        "sZeroRecords": "Tidak Ada Yang Di Cari",
                        "sProcessing": "Memuat Data...."
                    }
                });
            });

            function relodTable2() {
                tbl_adendum.DataTable().ajax.reload();
            }

            //   ini untuk detail taggihan
        }
    }




    function Edit_traking(id) {
        // window.open('<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/kelola_mc/') ?>' + id, '_blank');
        var edit_mc = $('#edit_mc')
        edit_mc.modal('show');
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                edit_mc.modal('show');
                $('#no_urut_mc_edit').text('Nomor Mc Ke' + response['row_mc'].no_mc);
                $('[name="tanggal_mc"]').val(response['row_mc'].tanggal_mc);
                $('[name="nilai_retensi_tanpa_persen"]').val(response['row_mc'].nilai_retensi);
                $('[name="nilai_retensi"]').val(response['row_mc'].nilai_retensi);
                $('[name="nilai_uang_muka"]').val(response['row_mc'].tanggal_mc);
                $('[name="denda"]').val(response['row_mc'].denda);
                $('[name="persen_ppn"]').val(response['row_mc'].persen_ppn);
                if (response['row_mc'].no_mc == 'um') {
                    $('[name="jumlah_mc_edit"]').val();
                } else if (response['row_mc'].no_mc == '1') {
                    $('[name="jumlah_mc_edit"]').val(response['row_mc'].sd_bulan_ini);
                } else {
                    $('[name="jumlah_mc_edit"]').val(response['total_mc_sebelum_edit'].sd_bulan_ini);
                }
                $('[name="jumlah_mc_rupiah"]').val('Rp. ' + response['row_mc'].jumlah_mc.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ',00');
                $('[name="id_detail_program_penyedia_jasa_edit"]').val(response['row_mc'].id_detail_program_penyedia_jasa);
                $('[name="jumlah_mc_biasa_edit"]').val(response['row_mc'].jumlah_mc);
                $('[name="data_no_mc_edit"]').val(response['row_mc'].no_mc);
                $('[name="id_mc_edit"]').val(response['row_mc'].id_mc);
            }
        });
    }

    // <
    // a style = "font-size:10px"
    // class = "btn btn-sm btn-block btn-warning text-white"
    // onclick = "Hapus_traking(' + response['get_detail_taggihan'][i].id_mc + ')"
    // href = "javascript:;" > Hapus Traking < /a>

    function Hapus_traking(id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/hapus_traking/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Data Berhasil Di Hapus!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                } else {}
            }
        });
    }

    function Pindah_urutan_mc(id) {
        var modal_pindah_urutan_mc = $('#modal_pindah_urutan_mc')
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                modal_pindah_urutan_mc.modal('show');
                var html = '';
                var i;
                var no = 0;
                var kirim_inisial = 0;
                for (i = 0; i < response['get_detail_taggihan'].length; ++i) {
                    html += '<tr>' +
                        '<td><input type="text" onkeyup="UbahUrutaan_mc(' + response['get_detail_taggihan'][i].id_mc + ',' + kirim_inisial++ + ')" name="no_mc_manipulasi' + no++ + '" value="' + response['get_detail_taggihan'][i].no_mc_manipulasi + '" class="form-control form-control-sm"></td>' +
                        '<td>' + response['get_detail_taggihan'][i].jumlah_mc + ' </td>' +
                        '</tr>';
                }
                $('.table_result_urutan').html(html);
            }
        });
    }


    function UbahUrutaan_mc(id_ubah, initial) {
        var no_urut_ubah = $('[name="no_mc_manipulasi' + initial + '"]').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/pindahkan_turunan') ?>",
            dataType: "JSON",
            data: {
                id_ubah: id_ubah,
                no_urut_ubah: no_urut_ubah
            },
            success: function(response) {
                if (response == 'success') {

                }
            }
        })
    }



    function UploadExcel(id_sub, id_program, id_mc) {
        var modal_excel = $('#modal_excel');
        $.ajax({
            type: "GET",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_by_id_excel/') ?>" + id_sub,
            dataType: "JSON",
            success: function(response) {
                modal_excel.modal('show');
                $('[name="id_detail_program_penyedia_jasa_excel"]').val(id_program);
                $('[name="id_detail_sub_program_penyedia_jasa_excel"]').val(id_sub);
                $('[name="id_mc_excel"]').val(id_mc);
                $('#nama_sub').html(response['sub'].nama_program_mata_anggaran);

            }
        });
    }




    function Simpan_mc() {
        var id_detail_program_penyedia_jasa = $('[name="id_detail_program_penyedia_jasa"]').val();
        if ($('[name="tanggal_mc"]').val() == '') {
            message('Harap Isi Tanggal!', 'warning', 'Tanggal Periode Belum Di Isi')
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tambah_mc') ?>",
                data: $('#form_mc').serialize(),
                dataType: "JSON",
                beforeSend: function() {
                    $('#simpan_mc_botton').css('display', 'none');
                    $('#loading_button_mc').css('display', 'block');
                },
                success: function(response) {
                    if (response == 'success') {
                        $('#simpan_mc_botton').css('display', 'block');
                        $('#loading_button_mc').css('display', 'none');
                        $('#modelId').modal('hide');
                        message('Berhasil!', 'success', 'Data Berhasil Disimpan!')
                        cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    } else {
                        // $(".eror_password2").html(response.password2);
                        // $(".eror_password").html(response.password);
                        // $(".eror_username").html(response.username);
                        // $(".eror_nama_pegawai").html(response.nama_pegawai);
                        // $(".eror_email").html(response.email);
                        // $(".eror_nip").html(response.nip);
                    }
                }
            })
        }

    }


    function Simpan_edit_traking() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/edit_mc_baru') ?>",
            data: $('#form_mc_edit').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    $('#edit_mc').modal('hide');
                    message('Berhasil!', 'success', 'Data Berhasil Update!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                } else {
                    // $(".eror_password2").html(response.password2);
                    // $(".eror_password").html(response.password);
                    // $(".eror_username").html(response.username);
                    // $(".eror_nama_pegawai").html(response.nama_pegawai);
                    // $(".eror_email").html(response.email);
                    // $(".eror_nip").html(response.nip);
                }
            }
        })
    }



    function UploadPenaggihan(id) {
        var ModalUploadPenaggihan = $('#modal_penagihan')
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                ModalUploadPenaggihan.modal('show');
                $('[name="id_mc_upload"]').val(response['row_mc'].id_mc)
                $('[name="id_detail_program_penyedia_jasa_mc_upload"]').val(response['row_mc'].id_detail_program_penyedia_jasa)
            }

        })
    }

    function Pencairan(id) {
        var modal_cair = $('#modal_pencairan');
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc_rapot/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                modal_cair.modal('show');
                $('[name="id_detail_program_penyedia_jasau"]').val(response['row_rapot_dummy'].id_detail_program_penyedia_jasa)
                $('[name="id_mc"]').val(response['row_rapot_dummy'].id_mc)
                $('[name="sts_tanggal_trakhir"]').val(response['row_rapot_dummy'].sts_tanggal_trakhir)
                $('[name="setelah_ppn"]').val(response['row_rapot_dummy'].setelah_ppn)
            }
        })
    }

    function Pencairan_grafik() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/pencairan_grafik') ?>",
            data: $('#form_pencairan_grafik').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Di Cairkan!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_pencairan').modal('hide');
                } else {}
            }
        })
    }




    function Traking_area2(id) {
        var Modal_traking = $('#modal_traking2')
        $.ajax({
            type: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                Modal_traking.modal('show');

                // // INI FORM UNTUK UPLOAD MC DAN KIRIM VENDOR PERTAMA KALI
                // $('#waktu_kirim_vendor').text(response['traking'].waktu_kirim_vendor)
                // $('#nama_vendormc').text(response['traking'].nama_vendor)
                // $('#ket_upload').text('Upload Mc ' + response['traking'].no_mc)

                // bareng bareng jangan becanda
                $('[name="id_detail_program_penyedia_jasa"]').val(response['row_mc'].id_detail_program_penyedia_jasa)
                $('[name="tanggal_mc"]').val(response['row_mc'].tanggal_mc)
                $('[name="id_traking"]').val(response['traking'].id_traking)
                $('[name="id_mc"]').val(response['traking'].id_mc)
                if (response['row_mc'].status_terakhir == '') {
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Vendor Kirim Berkas') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Revisi Area' || response['row_mc'].status_terakhir == 'Revisi Pusat' || response['row_mc'].status_terakhir == 'Revisi Finance') {
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Berkas Diterima Area') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Berkas Diterima Pusat') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Berkas Diterima Finance') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Aprove Area') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Aprove Pusat') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                } else if (response['row_mc'].status_terakhir == 'Pencairan') {
                    $('.show_vendor').attr("disabled", 'disabled');
                    $('.show_area').attr("disabled", 'disabled');
                    $('.show_pusat').attr("disabled", 'disabled');
                    $('.show_finance').attr("disabled", 'disabled');
                } else {

                }
                // vendor
                // $('[name="jumlah_hari_vendor"]').val(response['traking'].jumlah_hari_vendor)
                // $('[name="waktu_kirim_vendor"]').val(response['traking'].waktu_kirim_vendor)
                // // area
                // $('[name="jumlah_hari_area"]').val(response['traking'].jumlah_hari_area)
                // $('[name="waktu_kirim_area"]').val(response['traking'].waktu_kirim_area)
                // // pusat
                // $('[name="jumlah_hari_pusat"]').val(response['traking'].jumlah_hari_pusat)
                // $('[name="waktu_kirim_pusat"]').val(response['traking'].waktu_kirim_pusat)
                // // finance
                // $('[name="jumlah_hari_finance"]').val(response['traking'].jumlah_hari_finance)
                // $('[name="waktu_kirim_finance"]').val(response['traking'].waktu_kirim_finance)

                // Ini Kondisi Button 
                if (response['traking'].approve_vendor == 1) {
                    $('#button_vendor').css('display', 'none');
                } else {
                    $('#button_vendor').css('display', 'block');
                }

                if (response['traking'].approve_area == 1) {
                    $('#button_area').css('display', 'none');
                } else {
                    $('#button_area').css('display', 'block');
                }

                if (response['traking'].approve_pusat == 1) {
                    $('#button_pusat').css('display', 'none');
                } else {
                    $('#button_pusat').css('display', 'block');
                }

                if (response['traking'].approve_finance == 1) {
                    $('#button_finance').css('display', 'none');
                    $('#button_pencairan').css('display', 'block');
                } else {
                    $('#button_finance').css('display', 'block');
                    $('#button_pencairan').css('display', 'none');
                }

                // ini logika time line vendor
                $('#hari_vendor').text(response['get_traking_data'].hari_vendor + " Hari");
                $('#uraian_vendor').text(response['get_traking_data'].uraian);

                if (response['get_traking_data'].hari_vendor <= 10) {
                    $("#vendor_line").addClass("bg-soft-success text-success");
                } else {
                    $("#vendor_line").addClass("bg-soft-danger text-danger");
                }

                if (response['get_traking_data']) {
                    $('#hari_area').text(response['get_traking_data'].hari_area + " Hari");
                    $('#uraian_area').text(response['get_traking_data'].uraian);
                    if (response['get_traking_data'].hari_area <= 10) {
                        $("#area_line").addClass("bg-soft-success text-success");
                    } else {
                        $("#area_line").addClass("bg-soft-danger text-danger");
                    }

                } else {

                }

                if (response['get_traking_data']) {
                    $('#hari_pusat').text(response['get_traking_data'].hari_pusat + " Hari");
                    $('#uraian_pusat').text(response['get_traking_data'].uraian);
                    if (response['get_traking_data'].hari_pusat <= 10) {
                        $("#pusat_line").addClass("bg-soft-success text-success");
                    } else {
                        $("#pusat_line").addClass("bg-soft-danger text-danger");
                    }
                } else {

                }

                if (response['get_traking_data']) {
                    $('#hari_finance').text(response['get_traking_data'].hari_finance + " Hari");
                    $('#uraian_finance').text(response['get_traking_data'].uraian);
                    if (response['get_traking_data'].hari_finance <= 10) {
                        $("#finance_line").addClass("bg-soft-success text-success");
                    } else {
                        $("#finance_line").addClass("bg-soft-danger text-danger");
                    }
                } else {

                }

                $(document).ready(function() {
                    $('#datatable_traking_mc').DataTable({
                        "responsive": true,
                        "autoWidth": false,
                        "processing": true,
                        "serverSide": true,
                        "searching": true,
                        "bDestroy": true,
                        "info": false,
                        "order": [],
                        "ajax": {
                            "url": "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_data_traking_mc/') ?>" + id,
                            "type": "POST",
                        },
                        "oLanguage": {
                            "sSearch": "Cari Data : ",
                            "sEmptyTable": "Data Tidak Tersedia",
                            "sLoadingRecords": "Silahkan Tunggu - loading...",
                            "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                            "sZeroRecords": "Tidak Ada Yang Di Cari",
                            "sProcessing": "Memuat Data...."
                        }
                    });
                });

                function relodTable3() {
                    $('#datatable_traking_mc').DataTable().ajax.reload();
                }

            }

        })
    }



    function daysdifference(today, batas_aprove_vendor) {

        var startDay = new Date(today);
        var endDay = new Date(batas_aprove_vendor);


        var millisBetween = startDay.getTime() - endDay.getTime();
        var days = millisBetween / (1000 * 3600 * 24);
        return Math.round(Math.abs(days));

    }

    var ModalUploadPenaggihan = $('#modal_penagihan')
    $('#form_upload_mc').on('submit', function(e) {
        e.preventDefault();
        if ($('.file-mc').val() == '') {
            alert('File Belum Di Isi!!!');
        } else {
            $.ajax({
                url: "<?php echo base_url(); ?>taggihan_kontrak_admin/tagihan_kontrak/upload_file_mc",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                //   beforeSend: function() {
                //       $('#upload_mcku').attr('disabled', 'disabled');angga
                //   },
                success: function(response) {
                    $('#form_upload_mc')[0].reset();
                    //   $('#upload_mcku').attr('disabled', false);
                    ModalUploadPenaggihan.modal('hide');
                    message('Berhasil!', 'success', 'Data Berhasil Di Upload!')
                    //   message('success', 'Data Berhasil Di Upload');
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                }
            });
        }
    });

    function Setujui_area() {
        var id_traking = $('[name="id_mc_traking"]').val()
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/setujui_area') ?>",
            data: $('#form_aprove_area').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Di Aprove!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_aprove_area').modal('hide');
                } else {}
            }
        })
    }


    function Revisi_area() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/revisi_area') ?>",
            data: $('#form_revisi_area').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Mengirim Revisi!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_revisi_area').modal('hide');
                } else {}
            }
        })
    }

    function Setujui_pusat() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/setujui_pusat') ?>",
            data: $('#form_aprove_pusat').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Di Aprove!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_aprove_pusat').modal('hide');
                } else {}
            }
        })
    }

    function Revisi_pusat() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/revisi_pusat') ?>",
            data: $('#form_revisi_pusat').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Mengirim Revisi!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_revisi_pusat').modal('hide');
                } else {}
            }
        })
    }




    function Terima_finance() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/terima_berkas_finance') ?>",
            data: $('#form_aprove_finance').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berkas Di Terima!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_diterima_finance').modal('hide');
                } else {}
            }
        })
    }




    function Pencairan_finance() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/pencairan_finance') ?>",
            data: $('#form_pencairam').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Di Cairkan!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_pencairan').modal('hide');
                } else {}
            }
        })
    }



    function Kirim_revisi_vendor() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/kirim_revisi_vendor') ?>",
            data: $('#form_kirim_revisi_vendor').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('Berhasil!', 'success', 'Berhasil Mengirim Revisi!')
                    cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                    $('#modal_traking').modal('hide');
                    $('#modal_kirim_revisi_vendor').modal('hide');
                } else {}
            }
        })
    }



    function pilih_pic() {
        var pic = $('[name="pic"]').val();
        var tanggal_rapot = $('[name="tanggal_rapot"]').val();
        var uraian = $('[name="uraian"]').val();
        var html = '';
        if (pic == 'Vendor') {
            html += '<option value="Kirim Berkas">Kirim Berkas</option>';
        } else if (pic == 'Area') {
            html += '<option value="Terima">Terima</option>' +
                '<option value="Aprove">Aprove</option>' +
                '<option value="Revisi">Revisi</option>';
        } else if (pic == 'Pusat') {
            html += '<option value="Terima">Terima</option>' +
                '<option value="Aprove">Aprove</option>' +
                '<option value="Revisi">Revisi</option>';
        } else if (pic == 'Finance') {
            html += '<option value="Pencairan">Pencairan</option>' +
                '<option value="Terima">Terima</option>' +
                '<option value="Revisi">Revisi</option>';
        }
        if (uraian == 'Revisi') {
            $('#keterangan').css('display', 'block');
        } else {
            $('#keterangan').css('display', 'none');
            $('[name="keterangan_traking"]').val('');
        }
        $('#uraian').html(html);
    }

    function pilih_uraian() {
        var uraian = $('[name="uraian"]').val();
        if (uraian == 'Revisi') {
            $('#keterangan').css('display', 'block');
        } else {
            $('#keterangan').css('display', 'none');
            $('[name="keterangan_traking"]').val('');
        }
    }


    function Kirim_Traking() {
        var id_mcku = $('[name="id_mc"]').val();
        if ($('[name="pic"]').val() == '') {
            message('Maaf!', 'warning', 'Pic Tidak Boleh Kosong!');
        } else if ($('[name="tanggal_rapot"]').val() == '') {
            message('Maaf!', 'warning', 'Tanggal Tidak Boleh Kosong!');
        } else if ($('[name="uraian"]').val() == '') {
            message('Maaf!', 'warning', 'Tanggal Tidak Boleh Kosong!');
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/kirim_traking') ?>",
                data: $('#form_kirim_traking').serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response == 'success') {
                        message('Berhasil!', 'success', 'Berhasil Update Traking!')
                        cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
                        $.ajax({
                            type: "POST",
                            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc/') ?>" + id_mcku,
                            dataType: "JSON",
                            success: function(response) {
                                $('#form_kirim_traking')[0].reset();
                                if (response['row_mc'].status_terakhir == '') {
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_pusat').attr("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                    $('.show_vendor').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Vendor Kirim Berkas') {
                                    $('.show_area').removeAttr("disabled", 'disabled');
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_pusat').attRe("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Revisi Area' || response['row_mc'].status_terakhir == 'Revisi Pusat' || response['row_mc'].status_terakhir == 'Revisi Finance') {
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_pusat').attr("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                    $('.show_vendor').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Berkas Diterima Area') {
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_pusat').attr("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                    $('.show_area').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Berkas Diterima Pusat') {
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                    $('.show_pusat').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Berkas Diterima Finance') {
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_pusat').attr("disabled", 'disabled');
                                    $('.show_finance').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Aprove Area') {
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                    $('.show_pusat').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Aprove Pusat') {
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_pusat').attr("disabled", 'disabled');
                                    $('.show_finance').removeAttr("disabled", 'disabled');
                                } else if (response['row_mc'].status_terakhir == 'Pencairan') {
                                    $('.show_vendor').attr("disabled", 'disabled');
                                    $('.show_area').attr("disabled", 'disabled');
                                    $('.show_pusat').attr("disabled", 'disabled');
                                    $('.show_finance').attr("disabled", 'disabled');
                                    $('.show_finance').removeAttr("disabled", 'disabled');
                                } else {

                                }




                                $('#hari_vendor').text(response['get_traking_data'].hari_vendor + " Hari");
                                $('#uraian_vendor').text(response['get_traking_data'].uraian);
                                if (response['get_traking_data'].hari_vendor <= 10) {
                                    $("#vendor_line").addClass("bg-soft-success text-success");
                                } else {
                                    $("#vendor_line").addClass("bg-soft-danger text-danger");
                                }

                                if (response['get_traking_data']) {
                                    $('#hari_area').text(response['get_traking_data'].hari_area + " Hari");
                                    $('#uraian_area').text(response['get_traking_data'].uraian);
                                    if (response['get_traking_data'].hari_area <= 10) {
                                        $("#area_line").addClass("bg-soft-success text-success");
                                    } else {
                                        $("#area_line").addClass("bg-soft-danger text-danger");
                                    }

                                } else {

                                }

                                if (response['get_traking_data']) {
                                    $('#hari_pusat').text(response['get_traking_data'].hari_pusat + " Hari");
                                    $('#uraian_pusat').text(response['get_traking_data'].uraian);
                                    if (response['get_traking_data'].hari_pusat <= 10) {
                                        $("#pusat_line").addClass("bg-soft-success text-success");
                                    } else {
                                        $("#pusat_line").addClass("bg-soft-danger text-danger");
                                    }
                                } else {

                                }

                                if (response['get_traking_data']) {
                                    $('#hari_finance').text(response['get_traking_data'].hari_finance + " Hari");
                                    $('#uraian_finance').text(response['get_traking_data'].uraian);
                                    if (response['get_traking_data'].hari_finance <= 10) {
                                        $("#finance_line").addClass("bg-soft-success text-success");
                                    } else {
                                        $("#finance_line").addClass("bg-soft-danger text-danger");
                                    }
                                } else {

                                }
                            }

                        })
                        $(document).ready(function() {
                            $('#datatable_traking_mc').DataTable({
                                "responsive": true,
                                "autoWidth": false,
                                "processing": true,
                                "serverSide": true,
                                "searching": true,
                                "bDestroy": true,
                                "info": false,
                                "order": [],
                                "ajax": {
                                    "url": "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_data_traking_mc/') ?>" + id_mcku,
                                    "type": "POST",
                                },
                                "oLanguage": {
                                    "sSearch": "Cari Data : ",
                                    "sEmptyTable": "Data Tidak Tersedia",
                                    "sLoadingRecords": "Silahkan Tunggu - loading...",
                                    "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                                    "sZeroRecords": "Tidak Ada Yang Di Cari",
                                    "sProcessing": "Memuat Data...."
                                }
                            });
                        });
                    } else {

                    }
                }
            })
        }

    }
</script>

<script>
    var completes = document.querySelectorAll(".complete");
    var toggleButton = document.getElementById("toggleButton");

    function toggleComplete() {
        var lastComplete = completes[completes.length - 1];
        lastComplete.classList.toggle("complete");
    }

    toggleButton.onclick = toggleComplete;
</script>

<script>
    $("#jumlah_mc4").keyup(function() {
        var harga = $("#jumlah_mc4").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah-mc-4');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    $("#jumlah_mc2").keyup(function() {
        var harga = $("#jumlah_mc2").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>
<script>
    $("#jumlah_mc3").keyup(function() {
        var harga = $("#jumlah_mc3").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah2');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    $('#modal_traking2').bind('hide', function() {
        cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
    });
    $('#edit_mc').bind('hide', function() {
        cari_id_detail_program_penyedia_jasa(id_detail_program_penyedia_jasa)
    });
</script>


<script>
    function LogikaRetensi() {
        var sts_retensi = $('[name="sts_retensi"]').val();
        if (sts_retensi == 1) {
            $('#retensi_persen').css('display', 'none');
            $('#retensi_tidak_persen').css('display', 'block')
        } else if (sts_retensi == 2) {
            $('#retensi_persen').css('display', 'block');
            $('#retensi_tidak_persen').css('display', 'none')
        } else {
            $('[name="nilai_retensi"]').val('');
            $('#retensi_persen').css('display', 'none');
            $('#retensi_tidak_persen').css('display', 'none')
        }
    }
</script>


<script>
    $("#nilai_retensi2").keyup(function() {
        var harga = $("#nilai_retensi2").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah-retensi');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    $("#denda2").keyup(function() {
        var harga = $("#denda2").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah-denda');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    $("#nilai_sd_bulalan_lalu").keyup(function() {
        var harga = $("#nilai_sd_bulalan_lalu").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah-sd_bln_lalu');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>
<script>
    $("#nilai_uang_muka2").keyup(function() {
        var harga = $("#nilai_uang_muka2").val();
        var tanpa_rupiah = document.getElementById('tanpa-rupiah-uang-muka');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    function Generate_kontrak(id) {
        var cek_um = $('#nilai_tidak_ada_um').val();
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/generate_nilai_kontrak/') ?>" + id,
            data: {
                cek_um: cek_um,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    location.reload();
                } else {

                }
            }
        })
    }
</script>



<script>
    $(document).ready(function() {

        $('.tableMy').DataTable({
            "responsive": false,
            "dom": 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="fa fa-file-excel"> Excel</i>',
                    titleAttr: 'Excel'
                },
                {
                    extend: 'pdfHtml5',
                    text: '<i class="fa fa-file-pdf"> Pdf</i>',
                    titleAttr: 'PDF'
                }
            ],
        });

    });

    function Pilih_Baru() {
        var cek_buat_baru = $('[name="cek_buat_baru"]').val();
        var buat_baru = $('#buat_baru');
        if (cek_buat_baru == 'baru') {
            buat_baru.css('display', 'block')
        } else {
            buat_baru.css('display', 'none')
        }
    }

    function Pilih_Nilai_Kontrak(id) {
        var cek_kontrak_penyedia = $('[name="cek_kontrak_penyedia"]').val();
        var id_mc = $('[name="id_mc"]').val();
        var tabledata = $('#table_nilai_kontrak');
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/generate_nilai_kontrak/') ?>" + id,
            data: {
                cek_kontrak_penyedia: cek_kontrak_penyedia,
                id_mc: id_mc,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    update_bobot_permata_anggaran(id, cek_kontrak_penyedia, id_mc);
                } else {
                    message('error', 'Maaf', 'Nilai Kontrak Sudah Di Pilih!');
                }
            }
        })
    }

    function update_bobot_permata_anggaran(id, cek_kontrak_penyedia, id_mc) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/update_nilai_mc/') ?>" + id,
            data: {
                cek_kontrak_penyedia: cek_kontrak_penyedia,
                id_mc: id_mc,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    update_jumlah_mc(id, cek_kontrak_penyedia, id_mc);
                } else {

                }
            }
        })
    }

    function update_jumlah_mc(id, cek_kontrak_penyedia, id_mc) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/update_bobot_permata_anggaran/') ?>" + id,
            data: {
                cek_kontrak_penyedia: cek_kontrak_penyedia,
                id_mc: id_mc,
            },
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Nilai Kontrak Berhasil Di Pilih!');
                    location.reload();

                } else {

                }
            }
        })
    }
</script>



<script>
    var modal_edit_nilai_kontrak_mc = $('#modal_edit_nilai_kontrak_mc')
    var form_nilai_kontrak_mc = $('#form_nilai_kontrak_mc')

    function EditNilaiKontrak(id, type) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/by_id_mc_nilai_kontrak/') ?>" + id,
            dataType: "JSON",
            success: function(response) {
                modal_edit_nilai_kontrak_mc.modal('show');
                $('[name="id_detail_program_penyedia_jasa_edit"]').val(response['row_nilai_kontrak_mc'].id_detail_program_penyedia_jasa)
                $('[name="id_mc_edit"]').val(response['row_nilai_kontrak_mc'].id_mc)
                $('[name="sts_nilai_kontrak_mc_edit"]').val(response['row_nilai_kontrak_mc'].sts_nilai_kontrak_mc)
                $('[name="id_nilai_kontrak_mc"]').val(response['row_nilai_kontrak_mc'].id_nilai_kontrak_mc)
                $('[name="no_nilai_kontrak_mc"]').val(response['row_nilai_kontrak_mc'].no_nilai_kontrak_mc)
                $('[name="uraian_nilai_kontrak_mc"]').val(response['row_nilai_kontrak_mc'].uraian_nilai_kontrak_mc)
                $('[name="satuan_nilai_kontrak_mc"]').val(response['row_nilai_kontrak_mc'].satuan_nilai_kontrak_mc)
                $('[name="volume_nilai_kontrak_mc"]').val(response['row_nilai_kontrak_mc'].volume_nilai_kontrak_mc)
                $('[name="harga_satuan_nilai_kontrak_mc"]').val(response['row_nilai_kontrak_mc'].harga_satuan_nilai_kontrak_mc)
            }
        })
    }


    function save_data_nilai_kontrak_mc() {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/Simpan_nilai_kontrak') ?>",
            data: $('#form_nilai_kontrak_mc').serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message('success', 'Berhasil', 'Nilai Kontrak Berhasil Update!');
                    location.reload()
                } else {}
            }
        })
    }
</script>
<script>
    for (let i = 1; i <= 30; i++) {
        $('#myTabku' + i + ' a').click(function(e) {
            e.preventDefault();
            $(this).tab('show');
        });
        $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
            var id = $(e.target).attr("href").substr(1);
            window.location.hash = id;
        });
        var hash = window.location.hash;
        $('#myTabku1 ' + i + ' a[href="' + hash + '"]').tab('show');
    }
</script>


<script>
    $('#myTabku2' + ' a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });
    var hash = window.location.hash;
    $('#myTabku22 ' + i + ' a[href="' + hash + '"]').tab('show');
</script>


<script>
    $("#modal_tambah_dkh").on('hide.bs.modal', function() {
        form_tambah[0].reset();
    });
</script>

<!-- addendum -->

<!-- hps_penyedia_kontrak_mc_2 -->
<script>
    var modal_tambah_dkh_addendum = $('#modal_tambah_dkh_addendum');
    var form_tambah_addendum_hps_penyedia_kontrak_mc = $('#form_tambah_addendum_hps_penyedia_kontrak_mc')

    function modal_hps_penyedia_kontrak_mc_2_addendum(id_hps_penyedia_kontrak_mc_1, type, add) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_hps_penyedia_kontrak_mc_1') ?>",
            data: {
                id_hps_penyedia_kontrak_mc_1: id_hps_penyedia_kontrak_mc_1,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh_addendum.modal('show');
                $('[name="id_hps_penyedia_kontrak_mc_1"]').val(response['get_hps_penyedia_kontrak_mc_1'].id_hps_penyedia_kontrak_mc_1);
                $('[name="id_detail_program_penyedia_kontrak_mc_jasa"]').val(response['get_hps_penyedia_kontrak_mc_1'].id_detail_program_penyedia_kontrak_mc_jasa);
                $('[name="id_detail_sub_program_penyedia_kontrak_mc_jasa"]').val(response['get_hps_penyedia_kontrak_mc_1'].id_detail_sub_program_penyedia_kontrak_mc_jasa);
                if (type == 'edit') {
                    // get_hps_penyedia_kontrak_mc_1
                    if (add == '_addendum_' + 1) {
                        $('[name="type_add"]').val(1);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_1);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_1);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_1);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_1);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_1);
                    } else if (add == '_addendum_' + 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_2);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_2);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_2);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_2);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_2);
                    } else if (add == '_addendum_' + 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_3);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_3);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_3);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_3);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_3);

                        // 4
                        // _addendum_4
                    } else if (add == '_addendum_' + 4) {
                        $('[name="type_add"]').val(4);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_4);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_4);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_4);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_4);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_4);
                        // 5
                        // _addendum_5
                    } else if (add == '_addendum_' + 5) {
                        $('[name="type_add"]').val(5);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_5);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_5);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_5);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_5);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_5);
                        // 6
                        // _addendum_6
                    } else if (add == '_addendum_' + 6) {
                        $('[name="type_add"]').val(6);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_6);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_6);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_6);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_6);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_6);
                        // 7
                        // _addendum_7
                    } else if (add == '_addendum_' + 7) {
                        $('[name="type_add"]').val(7);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_7);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_7);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_7);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_7);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_7);
                        // 8
                        // _addendum_8
                    } else if (add == '_addendum_' + 8) {
                        $('[name="type_add"]').val(8);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_8);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_8);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_8);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_8);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_8);
                        // 9
                        // _addendum_9
                    } else if (add == '_addendum_' + 9) {
                        $('[name="type_add"]').val(9);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_9);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_9);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_9);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_9);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_9);
                        // 10
                        // _addendum_10
                    } else if (add == '_addendum_' + 10) {
                        $('[name="type_add"]').val(10);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_10);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_10);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_10);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_10);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_10);
                        // 11
                        // _addendum_11
                    } else if (add == '_addendum_' + 11) {
                        $('[name="type_add"]').val(11);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_11);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_11);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_11);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_11);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_11);
                        // 12
                        // _addendum_12
                    } else if (add == '_addendum_' + 12) {
                        $('[name="type_add"]').val(12);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_12);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_12);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_12);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_12);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_12);
                        // 13
                        // _addendum_13
                    } else if (add == '_addendum_' + 13) {
                        $('[name="type_add"]').val(13);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_13);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_13);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_13);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_13);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_13);
                        // 14
                        // _addendum_14
                    } else if (add == '_addendum_' + 14) {
                        $('[name="type_add"]').val(14);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_14);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_14);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_14);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_14);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_14);
                        // 15
                        // _addendum_15
                    } else if (add == '_addendum_' + 15) {
                        $('[name="type_add"]').val(15);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_15);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_15);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_15);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_15);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_15);
                        // 16
                        // _addendum_16
                    } else if (add == '_addendum_' + 16) {
                        $('[name="type_add"]').val(16);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_16);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_16);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_16);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_16);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_16);
                        // 17
                        // _addendum_17
                    } else if (add == '_addendum_' + 17) {
                        $('[name="type_add"]').val(17);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_17);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_17);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_17);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_17);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_17);
                        // 18
                        // _addendum_18
                    } else if (add == '_addendum_' + 18) {
                        $('[name="type_add"]').val(18);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_18);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_18);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_18);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_18);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_18);
                        // 19
                        // _addendum_19
                    } else if (add == '_addendum_' + 19) {
                        $('[name="type_add"]').val(19);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_19);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_19);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_19);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_19);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_19);
                        // 20
                        // _addendum_20
                    } else if (add == '_addendum_' + 20) {
                        $('[name="type_add"]').val(20);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_20);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_20);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_20);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_20);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_20);
                        // 21
                        // _addendum_21
                    } else if (add == '_addendum_' + 21) {
                        $('[name="type_add"]').val(21);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_21);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_21);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_21);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_21);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_21);
                        // 22
                        // _addendum_22
                    } else if (add == '_addendum_' + 22) {
                        $('[name="type_add"]').val(22);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_22);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_22);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_22);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_22);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_22);
                        // 23
                        // _addendum_23
                    } else if (add == '_addendum_' + 23) {
                        $('[name="type_add"]').val(23);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_23);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_23);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_23);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_23);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_23);
                        // 24
                        // _addendum_24
                    } else if (add == '_addendum_' + 24) {
                        $('[name="type_add"]').val(24);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_24);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_24);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_24);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_24);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_24);
                        // 25
                        // _addendum_25
                    } else if (add == '_addendum_' + 25) {
                        $('[name="type_add"]').val(25);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_25);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_25);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_25);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_25);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_25);
                        // 26
                        // _addendum_26
                    } else if (add == '_addendum_' + 26) {
                        $('[name="type_add"]').val(26);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_26);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_26);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_26);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_26);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_26);
                        // 27
                        // _addendum_27
                    } else if (add == '_addendum_' + 27) {
                        $('[name="type_add"]').val(27);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_27);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_27);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_27);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_27);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_27);
                        // 28
                        // _addendum_28
                    } else if (add == '_addendum_' + 28) {
                        $('[name="type_add"]').val(28);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_28);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_28);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_28);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_28);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_28);
                        // 29
                        // _addendum_29
                    } else if (add == '_addendum_' + 29) {
                        $('[name="type_add"]').val(29);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_29);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_29);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_29);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_29);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_29);
                        // 30
                        // _addendum_30
                    } else if (add == '_addendum_' + 30) {
                        $('[name="type_add"]').val(30);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps_addendum_30);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps_addendum_30);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps_addendum_30);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps_addendum_30);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps_addendum_30);

                    } else {
                        $('[name="type_add"]').val('kontrak_awal');
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].no_hps);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].uraian_hps);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].satuan_hps);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].volume_hps);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_1'].harga_satuan_hps);
                    }

                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'block');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'block');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                }

            }
        })
    }

    function save_hps_penyedia_kontrak_mc_2_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tambah_hps_penyedia_kontrak_mc_2_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/edit_hps_penyedia_kontrak_mc_2_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>


<!-- hps_penyedia_kontrak_mc_3 -->
<script>
    function modal_hps_penyedia_kontrak_mc_3_addendum(id_hps_penyedia_kontrak_mc_2, type, add) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_hps_penyedia_kontrak_mc_2') ?>",
            data: {
                id_hps_penyedia_kontrak_mc_2: id_hps_penyedia_kontrak_mc_2,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh_addendum.modal('show');
                $('[name="id_hps_penyedia_kontrak_mc_2"]').val(response['get_hps_penyedia_kontrak_mc_2'].id_hps_penyedia_kontrak_mc_2);
                if (type == 'edit') {
                    // kontrak_2
                    if (add == '_addendum_' + 1) {
                        $('[name="type_add"]').val(1);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_1);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_1);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_1);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_1);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_1);
                    } else if (add == '_addendum_' + 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_2);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_2);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_2);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_2);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_2);
                    } else if (add == '_addendum_' + 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_3);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_3);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_3);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_3);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_3);

                        // 4
                        // _addendum_4
                    } else if (add == '_addendum_' + 4) {
                        $('[name="type_add"]').val(4);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_4);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_4);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_4);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_4);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_4);
                        // 5
                        // _addendum_5
                    } else if (add == '_addendum_' + 5) {
                        $('[name="type_add"]').val(5);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_5);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_5);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_5);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_5);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_5);
                        // 6
                        // _addendum_6
                    } else if (add == '_addendum_' + 6) {
                        $('[name="type_add"]').val(6);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_6);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_6);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_6);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_6);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_6);
                        // 7
                        // _addendum_7
                    } else if (add == '_addendum_' + 7) {
                        $('[name="type_add"]').val(7);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_7);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_7);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_7);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_7);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_7);
                        // 8
                        // _addendum_8
                    } else if (add == '_addendum_' + 8) {
                        $('[name="type_add"]').val(8);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_8);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_8);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_8);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_8);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_8);
                        // 9
                        // _addendum_9
                    } else if (add == '_addendum_' + 9) {
                        $('[name="type_add"]').val(9);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_9);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_9);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_9);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_9);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_9);
                        // 10
                        // _addendum_10
                    } else if (add == '_addendum_' + 10) {
                        $('[name="type_add"]').val(10);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_10);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_10);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_10);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_10);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_10);
                        // 11
                        // _addendum_11
                    } else if (add == '_addendum_' + 11) {
                        $('[name="type_add"]').val(11);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_11);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_11);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_11);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_11);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_11);
                        // 12
                        // _addendum_12
                    } else if (add == '_addendum_' + 12) {
                        $('[name="type_add"]').val(12);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_12);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_12);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_12);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_12);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_12);
                        // 13
                        // _addendum_13
                    } else if (add == '_addendum_' + 13) {
                        $('[name="type_add"]').val(13);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_13);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_13);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_13);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_13);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_13);
                        // 14
                        // _addendum_14
                    } else if (add == '_addendum_' + 14) {
                        $('[name="type_add"]').val(14);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_14);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_14);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_14);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_14);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_14);
                        // 15
                        // _addendum_15
                    } else if (add == '_addendum_' + 15) {
                        $('[name="type_add"]').val(15);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_15);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_15);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_15);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_15);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_15);
                        // 16
                        // _addendum_16
                    } else if (add == '_addendum_' + 16) {
                        $('[name="type_add"]').val(16);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_16);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_16);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_16);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_16);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_16);
                        // 17
                        // _addendum_17
                    } else if (add == '_addendum_' + 17) {
                        $('[name="type_add"]').val(17);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_17);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_17);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_17);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_17);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_17);
                        // 18
                        // _addendum_18
                    } else if (add == '_addendum_' + 18) {
                        $('[name="type_add"]').val(18);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_18);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_18);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_18);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_18);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_18);
                        // 19
                        // _addendum_19
                    } else if (add == '_addendum_' + 19) {
                        $('[name="type_add"]').val(19);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_19);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_19);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_19);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_19);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_19);
                        // 20
                        // _addendum_20
                    } else if (add == '_addendum_' + 20) {
                        $('[name="type_add"]').val(20);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_20);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_20);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_20);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_20);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_20);
                        // 21
                        // _addendum_21
                    } else if (add == '_addendum_' + 21) {
                        $('[name="type_add"]').val(21);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_21);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_21);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_21);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_21);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_21);
                        // 22
                        // _addendum_22
                    } else if (add == '_addendum_' + 22) {
                        $('[name="type_add"]').val(22);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_22);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_22);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_22);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_22);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_22);
                        // 23
                        // _addendum_23
                    } else if (add == '_addendum_' + 23) {
                        $('[name="type_add"]').val(23);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_23);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_23);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_23);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_23);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_23);
                        // 24
                        // _addendum_24
                    } else if (add == '_addendum_' + 24) {
                        $('[name="type_add"]').val(24);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_24);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_24);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_24);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_24);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_24);
                        // 25
                        // _addendum_25
                    } else if (add == '_addendum_' + 25) {
                        $('[name="type_add"]').val(25);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_25);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_25);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_25);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_25);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_25);
                        // 26
                        // _addendum_26
                    } else if (add == '_addendum_' + 26) {
                        $('[name="type_add"]').val(26);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_26);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_26);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_26);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_26);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_26);
                        // 27
                        // _addendum_27
                    } else if (add == '_addendum_' + 27) {
                        $('[name="type_add"]').val(27);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_27);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_27);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_27);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_27);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_27);
                        // 28
                        // _addendum_28
                    } else if (add == '_addendum_' + 28) {
                        $('[name="type_add"]').val(28);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_28);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_28);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_28);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_28);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_28);
                        // 29
                        // _addendum_29
                    } else if (add == '_addendum_' + 29) {
                        $('[name="type_add"]').val(29);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_29);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_29);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_29);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_29);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_29);
                        // 30
                        // _addendum_30
                    } else if (add == '_addendum_' + 30) {
                        $('[name="type_add"]').val(30);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps_addendum_30);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps_addendum_30);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps_addendum_30);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps_addendum_30);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps_addendum_30);

                    } else {
                        $('[name="type_add"]').val('kontrak_awal');
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].no_hps);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].uraian_hps);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].satuan_hps);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].volume_hps);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_2'].harga_satuan_hps);
                    }

                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'block');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'block');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                }
            }
        })
    }
    var form_tambah_addendum_hps_penyedia_kontrak_mc = $('#form_tambah_addendum_hps_penyedia_kontrak_mc')

    function save_hps_penyedia_kontrak_mc_3_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tambah_hps_penyedia_kontrak_mc_3_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/edit_hps_penyedia_kontrak_mc_3_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>

<!-- hps_penyedia_kontrak_mc_4 -->
<script>
    function modal_hps_penyedia_kontrak_mc_4_addendum(id_hps_penyedia_kontrak_mc_3, type, add) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_hps_penyedia_kontrak_mc_3') ?>",
            data: {
                id_hps_penyedia_kontrak_mc_3: id_hps_penyedia_kontrak_mc_3,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh_addendum.modal('show');

                $('[name="id_hps_penyedia_kontrak_mc_3"]').val(response['get_hps_penyedia_kontrak_mc_3'].id_hps_penyedia_kontrak_mc_3);
                if (type == 'edit') {

                    // kontrak_3
                    if (add == '_addendum_' + 1) {
                        $('[name="type_add"]').val(1);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_1);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_1);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_1);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_1);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_1);
                    } else if (add == '_addendum_' + 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_2);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_2);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_2);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_2);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_2);
                    } else if (add == '_addendum_' + 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_3);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_3);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_3);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_3);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_3);

                        // 4
                        // _addendum_4
                    } else if (add == '_addendum_' + 4) {
                        $('[name="type_add"]').val(4);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_4);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_4);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_4);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_4);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_4);
                        // 5
                        // _addendum_5
                    } else if (add == '_addendum_' + 5) {
                        $('[name="type_add"]').val(5);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_5);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_5);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_5);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_5);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_5);
                        // 6
                        // _addendum_6
                    } else if (add == '_addendum_' + 6) {
                        $('[name="type_add"]').val(6);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_6);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_6);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_6);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_6);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_6);
                        // 7
                        // _addendum_7
                    } else if (add == '_addendum_' + 7) {
                        $('[name="type_add"]').val(7);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_7);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_7);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_7);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_7);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_7);
                        // 8
                        // _addendum_8
                    } else if (add == '_addendum_' + 8) {
                        $('[name="type_add"]').val(8);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_8);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_8);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_8);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_8);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_8);
                        // 9
                        // _addendum_9
                    } else if (add == '_addendum_' + 9) {
                        $('[name="type_add"]').val(9);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_9);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_9);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_9);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_9);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_9);
                        // 10
                        // _addendum_10
                    } else if (add == '_addendum_' + 10) {
                        $('[name="type_add"]').val(10);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_10);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_10);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_10);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_10);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_10);
                        // 11
                        // _addendum_11
                    } else if (add == '_addendum_' + 11) {
                        $('[name="type_add"]').val(11);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_11);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_11);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_11);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_11);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_11);
                        // 12
                        // _addendum_12
                    } else if (add == '_addendum_' + 12) {
                        $('[name="type_add"]').val(12);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_12);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_12);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_12);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_12);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_12);
                        // 13
                        // _addendum_13
                    } else if (add == '_addendum_' + 13) {
                        $('[name="type_add"]').val(13);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_13);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_13);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_13);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_13);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_13);
                        // 14
                        // _addendum_14
                    } else if (add == '_addendum_' + 14) {
                        $('[name="type_add"]').val(14);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_14);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_14);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_14);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_14);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_14);
                        // 15
                        // _addendum_15
                    } else if (add == '_addendum_' + 15) {
                        $('[name="type_add"]').val(15);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_15);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_15);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_15);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_15);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_15);
                        // 16
                        // _addendum_16
                    } else if (add == '_addendum_' + 16) {
                        $('[name="type_add"]').val(16);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_16);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_16);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_16);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_16);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_16);
                        // 17
                        // _addendum_17
                    } else if (add == '_addendum_' + 17) {
                        $('[name="type_add"]').val(17);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_17);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_17);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_17);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_17);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_17);
                        // 18
                        // _addendum_18
                    } else if (add == '_addendum_' + 18) {
                        $('[name="type_add"]').val(18);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_18);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_18);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_18);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_18);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_18);
                        // 19
                        // _addendum_19
                    } else if (add == '_addendum_' + 19) {
                        $('[name="type_add"]').val(19);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_19);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_19);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_19);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_19);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_19);
                        // 20
                        // _addendum_20
                    } else if (add == '_addendum_' + 20) {
                        $('[name="type_add"]').val(20);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_20);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_20);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_20);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_20);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_20);
                        // 21
                        // _addendum_21
                    } else if (add == '_addendum_' + 21) {
                        $('[name="type_add"]').val(21);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_21);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_21);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_21);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_21);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_21);
                        // 22
                        // _addendum_22
                    } else if (add == '_addendum_' + 22) {
                        $('[name="type_add"]').val(22);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_22);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_22);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_22);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_22);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_22);
                        // 23
                        // _addendum_23
                    } else if (add == '_addendum_' + 23) {
                        $('[name="type_add"]').val(23);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_23);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_23);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_23);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_23);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_23);
                        // 24
                        // _addendum_24
                    } else if (add == '_addendum_' + 24) {
                        $('[name="type_add"]').val(24);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_24);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_24);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_24);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_24);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_24);
                        // 25
                        // _addendum_25
                    } else if (add == '_addendum_' + 25) {
                        $('[name="type_add"]').val(25);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_25);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_25);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_25);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_25);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_25);
                        // 26
                        // _addendum_26
                    } else if (add == '_addendum_' + 26) {
                        $('[name="type_add"]').val(26);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_26);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_26);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_26);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_26);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_26);
                        // 27
                        // _addendum_27
                    } else if (add == '_addendum_' + 27) {
                        $('[name="type_add"]').val(27);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_27);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_27);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_27);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_27);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_27);
                        // 28
                        // _addendum_28
                    } else if (add == '_addendum_' + 28) {
                        $('[name="type_add"]').val(28);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_28);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_28);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_28);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_28);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_28);
                        // 29
                        // _addendum_29
                    } else if (add == '_addendum_' + 29) {
                        $('[name="type_add"]').val(29);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_29);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_29);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_29);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_29);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_29);
                        // 30
                        // _addendum_30
                    } else if (add == '_addendum_' + 30) {
                        $('[name="type_add"]').val(30);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps_addendum_30);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps_addendum_30);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps_addendum_30);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps_addendum_30);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps_addendum_30);

                    } else {
                        $('[name="type_add"]').val('kontrak_awal');
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].no_hps);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].uraian_hps);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].satuan_hps);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].volume_hps);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_3'].harga_satuan_hps);
                    }

                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'block');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'block');
                    $('#simpan_5_addendum').css('display', 'none');
                }

            }
        })
    }
    var form_tambah_addendum_hps_penyedia_kontrak_mc = $('#form_tambah_addendum_hps_penyedia_kontrak_mc')

    function save_hps_penyedia_kontrak_mc_4_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tambah_hps_penyedia_kontrak_mc_4_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/edit_hps_penyedia_kontrak_mc_4_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>


<!-- hps_penyedia_kontrak_mc_5 -->
<script>
    function modal_hps_penyedia_kontrak_mc_5_addendum(id_hps_penyedia_kontrak_mc_4, type, add) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_hps_penyedia_kontrak_mc_4') ?>",
            data: {
                id_hps_penyedia_kontrak_mc_4: id_hps_penyedia_kontrak_mc_4,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh_addendum.modal('show');
                $('[name="id_hps_penyedia_kontrak_mc_4"]').val(response['get_hps_penyedia_kontrak_mc_4'].id_hps_penyedia_kontrak_mc_4);
                if (type == 'edit') {
                    // kontrak_4
                    if (add == '_addendum_' + 1) {
                        $('[name="type_add"]').val(1);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_1);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_1);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_1);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_1);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_1);
                    } else if (add == '_addendum_' + 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_2);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_2);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_2);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_2);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_2);
                    } else if (add == '_addendum_' + 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_3);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_3);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_3);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_3);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_3);

                        // 4
                        // _addendum_4
                    } else if (add == '_addendum_' + 4) {
                        $('[name="type_add"]').val(4);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_4);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_4);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_4);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_4);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_4);
                        // 5
                        // _addendum_5
                    } else if (add == '_addendum_' + 5) {
                        $('[name="type_add"]').val(5);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_5);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_5);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_5);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_5);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_5);
                        // 6
                        // _addendum_6
                    } else if (add == '_addendum_' + 6) {
                        $('[name="type_add"]').val(6);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_6);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_6);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_6);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_6);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_6);
                        // 7
                        // _addendum_7
                    } else if (add == '_addendum_' + 7) {
                        $('[name="type_add"]').val(7);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_7);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_7);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_7);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_7);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_7);
                        // 8
                        // _addendum_8
                    } else if (add == '_addendum_' + 8) {
                        $('[name="type_add"]').val(8);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_8);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_8);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_8);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_8);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_8);
                        // 9
                        // _addendum_9
                    } else if (add == '_addendum_' + 9) {
                        $('[name="type_add"]').val(9);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_9);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_9);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_9);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_9);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_9);
                        // 10
                        // _addendum_10
                    } else if (add == '_addendum_' + 10) {
                        $('[name="type_add"]').val(10);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_10);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_10);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_10);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_10);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_10);
                        // 11
                        // _addendum_11
                    } else if (add == '_addendum_' + 11) {
                        $('[name="type_add"]').val(11);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_11);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_11);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_11);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_11);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_11);
                        // 12
                        // _addendum_12
                    } else if (add == '_addendum_' + 12) {
                        $('[name="type_add"]').val(12);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_12);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_12);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_12);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_12);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_12);
                        // 13
                        // _addendum_13
                    } else if (add == '_addendum_' + 13) {
                        $('[name="type_add"]').val(13);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_13);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_13);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_13);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_13);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_13);
                        // 14
                        // _addendum_14
                    } else if (add == '_addendum_' + 14) {
                        $('[name="type_add"]').val(14);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_14);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_14);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_14);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_14);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_14);
                        // 15
                        // _addendum_15
                    } else if (add == '_addendum_' + 15) {
                        $('[name="type_add"]').val(15);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_15);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_15);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_15);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_15);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_15);
                        // 16
                        // _addendum_16
                    } else if (add == '_addendum_' + 16) {
                        $('[name="type_add"]').val(16);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_16);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_16);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_16);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_16);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_16);
                        // 17
                        // _addendum_17
                    } else if (add == '_addendum_' + 17) {
                        $('[name="type_add"]').val(17);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_17);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_17);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_17);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_17);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_17);
                        // 18
                        // _addendum_18
                    } else if (add == '_addendum_' + 18) {
                        $('[name="type_add"]').val(18);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_18);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_18);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_18);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_18);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_18);
                        // 19
                        // _addendum_19
                    } else if (add == '_addendum_' + 19) {
                        $('[name="type_add"]').val(19);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_19);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_19);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_19);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_19);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_19);
                        // 20
                        // _addendum_20
                    } else if (add == '_addendum_' + 20) {
                        $('[name="type_add"]').val(20);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_20);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_20);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_20);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_20);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_20);
                        // 21
                        // _addendum_21
                    } else if (add == '_addendum_' + 21) {
                        $('[name="type_add"]').val(21);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_21);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_21);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_21);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_21);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_21);
                        // 22
                        // _addendum_22
                    } else if (add == '_addendum_' + 22) {
                        $('[name="type_add"]').val(22);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_22);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_22);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_22);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_22);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_22);
                        // 23
                        // _addendum_23
                    } else if (add == '_addendum_' + 23) {
                        $('[name="type_add"]').val(23);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_23);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_23);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_23);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_23);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_23);
                        // 24
                        // _addendum_24
                    } else if (add == '_addendum_' + 24) {
                        $('[name="type_add"]').val(24);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_24);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_24);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_24);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_24);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_24);
                        // 25
                        // _addendum_25
                    } else if (add == '_addendum_' + 25) {
                        $('[name="type_add"]').val(25);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_25);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_25);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_25);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_25);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_25);
                        // 26
                        // _addendum_26
                    } else if (add == '_addendum_' + 26) {
                        $('[name="type_add"]').val(26);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_26);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_26);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_26);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_26);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_26);
                        // 27
                        // _addendum_27
                    } else if (add == '_addendum_' + 27) {
                        $('[name="type_add"]').val(27);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_27);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_27);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_27);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_27);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_27);
                        // 28
                        // _addendum_28
                    } else if (add == '_addendum_' + 28) {
                        $('[name="type_add"]').val(28);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_28);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_28);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_28);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_28);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_28);
                        // 29
                        // _addendum_29
                    } else if (add == '_addendum_' + 29) {
                        $('[name="type_add"]').val(29);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_29);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_29);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_29);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_29);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_29);
                        // 30
                        // _addendum_30
                    } else if (add == '_addendum_' + 30) {
                        $('[name="type_add"]').val(30);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps_addendum_30);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps_addendum_30);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps_addendum_30);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps_addendum_30);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps_addendum_30);

                    } else {
                        $('[name="type_add"]').val('kontrak_awal');
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].no_hps);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].uraian_hps);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].satuan_hps);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].volume_hps);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_4'].harga_satuan_hps);
                    }

                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'block');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');
                } else {
                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'block');
                }
            }
        })
    }
    var form_tambah_addendum_hps_penyedia_kontrak_mc = $('#form_tambah_addendum_hps_penyedia_kontrak_mc')

    function save_hps_penyedia_kontrak_mc_5_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tambah_hps_penyedia_kontrak_mc_5_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/edit_hps_penyedia_kontrak_mc_5_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>

<!-- hps_penyedia_kontrak_mc_6 -->
<script>
    function modal_hps_penyedia_kontrak_mc_6_addendum(id_hps_penyedia_kontrak_mc_5, type, add) {
        $.ajax({
            method: "POST",
            url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/get_hps_penyedia_kontrak_mc_5') ?>",
            data: {
                id_hps_penyedia_kontrak_mc_5: id_hps_penyedia_kontrak_mc_5,
            },
            dataType: "JSON",
            success: function(response) {
                modal_tambah_dkh_addendum.modal('show');

                $('[name="id_hps_penyedia_kontrak_mc_5"]').val(response['get_hps_penyedia_kontrak_mc_5'].id_hps_penyedia_kontrak_mc_5);
                if (type == 'edit') {




                    // kontrak_5
                    if (add == '_addendum_' + 1) {
                        $('[name="type_add"]').val(1);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_1);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_1);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_1);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_1);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_1);
                    } else if (add == '_addendum_' + 2) {
                        // 2
                        // _addendum_2
                        $('[name="type_add"]').val(2);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_2);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_2);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_2);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_2);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_2);
                    } else if (add == '_addendum_' + 3) {
                        // 3
                        // _addendum_3
                        $('[name="type_add"]').val(3);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_3);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_3);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_3);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_3);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_3);

                        // 4
                        // _addendum_4
                    } else if (add == '_addendum_' + 4) {
                        $('[name="type_add"]').val(4);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_4);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_4);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_4);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_4);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_4);
                        // 5
                        // _addendum_5
                    } else if (add == '_addendum_' + 5) {
                        $('[name="type_add"]').val(5);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_5);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_5);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_5);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_5);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_5);
                        // 6
                        // _addendum_6
                    } else if (add == '_addendum_' + 6) {
                        $('[name="type_add"]').val(6);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_6);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_6);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_6);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_6);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_6);
                        // 7
                        // _addendum_7
                    } else if (add == '_addendum_' + 7) {
                        $('[name="type_add"]').val(7);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_7);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_7);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_7);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_7);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_7);
                        // 8
                        // _addendum_8
                    } else if (add == '_addendum_' + 8) {
                        $('[name="type_add"]').val(8);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_8);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_8);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_8);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_8);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_8);
                        // 9
                        // _addendum_9
                    } else if (add == '_addendum_' + 9) {
                        $('[name="type_add"]').val(9);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_9);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_9);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_9);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_9);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_9);
                        // 10
                        // _addendum_10
                    } else if (add == '_addendum_' + 10) {
                        $('[name="type_add"]').val(10);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_10);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_10);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_10);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_10);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_10);
                        // 11
                        // _addendum_11
                    } else if (add == '_addendum_' + 11) {
                        $('[name="type_add"]').val(11);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_11);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_11);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_11);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_11);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_11);
                        // 12
                        // _addendum_12
                    } else if (add == '_addendum_' + 12) {
                        $('[name="type_add"]').val(12);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_12);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_12);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_12);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_12);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_12);
                        // 13
                        // _addendum_13
                    } else if (add == '_addendum_' + 13) {
                        $('[name="type_add"]').val(13);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_13);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_13);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_13);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_13);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_13);
                        // 14
                        // _addendum_14
                    } else if (add == '_addendum_' + 14) {
                        $('[name="type_add"]').val(14);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_14);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_14);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_14);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_14);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_14);
                        // 15
                        // _addendum_15
                    } else if (add == '_addendum_' + 15) {
                        $('[name="type_add"]').val(15);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_15);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_15);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_15);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_15);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_15);
                        // 16
                        // _addendum_16
                    } else if (add == '_addendum_' + 16) {
                        $('[name="type_add"]').val(16);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_16);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_16);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_16);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_16);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_16);
                        // 17
                        // _addendum_17
                    } else if (add == '_addendum_' + 17) {
                        $('[name="type_add"]').val(17);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_17);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_17);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_17);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_17);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_17);
                        // 18
                        // _addendum_18
                    } else if (add == '_addendum_' + 18) {
                        $('[name="type_add"]').val(18);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_18);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_18);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_18);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_18);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_18);
                        // 19
                        // _addendum_19
                    } else if (add == '_addendum_' + 19) {
                        $('[name="type_add"]').val(19);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_19);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_19);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_19);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_19);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_19);
                        // 20
                        // _addendum_20
                    } else if (add == '_addendum_' + 20) {
                        $('[name="type_add"]').val(20);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_20);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_20);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_20);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_20);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_20);
                        // 21
                        // _addendum_21
                    } else if (add == '_addendum_' + 21) {
                        $('[name="type_add"]').val(21);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_21);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_21);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_21);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_21);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_21);
                        // 22
                        // _addendum_22
                    } else if (add == '_addendum_' + 22) {
                        $('[name="type_add"]').val(22);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_22);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_22);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_22);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_22);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_22);
                        // 23
                        // _addendum_23
                    } else if (add == '_addendum_' + 23) {
                        $('[name="type_add"]').val(23);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_23);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_23);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_23);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_23);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_23);
                        // 24
                        // _addendum_24
                    } else if (add == '_addendum_' + 24) {
                        $('[name="type_add"]').val(24);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_24);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_24);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_24);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_24);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_24);
                        // 25
                        // _addendum_25
                    } else if (add == '_addendum_' + 25) {
                        $('[name="type_add"]').val(25);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_25);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_25);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_25);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_25);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_25);
                        // 26
                        // _addendum_26
                    } else if (add == '_addendum_' + 26) {
                        $('[name="type_add"]').val(26);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_26);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_26);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_26);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_26);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_26);
                        // 27
                        // _addendum_27
                    } else if (add == '_addendum_' + 27) {
                        $('[name="type_add"]').val(27);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_27);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_27);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_27);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_27);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_27);
                        // 28
                        // _addendum_28
                    } else if (add == '_addendum_' + 28) {
                        $('[name="type_add"]').val(28);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_28);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_28);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_28);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_28);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_28);
                        // 29
                        // _addendum_29
                    } else if (add == '_addendum_' + 29) {
                        $('[name="type_add"]').val(29);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_29);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_29);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_29);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_29);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_29);
                        // 30
                        // _addendum_30
                    } else if (add == '_addendum_' + 30) {
                        $('[name="type_add"]').val(30);
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps_addendum_30);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps_addendum_30);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps_addendum_30);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps_addendum_30);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps_addendum_30);

                    } else {
                        $('[name="type_add"]').val('kontrak_awal');
                        $('[name="no_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].no_hps);
                        $('[name="uraian_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].uraian_hps);
                        $('[name="satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].satuan_hps);
                        $('[name="volume_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].volume_hps);
                        $('[name="harga_satuan_hps"]').val(response['get_hps_penyedia_kontrak_mc_5'].harga_satuan_hps);
                    }

                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    $('#edit_6_addendum').css('display', 'block');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'none');

                } else {
                    // edit
                    $('#edit_1_addendum').css('display', 'none');
                    $('#edit_2_addendum').css('display', 'none');
                    $('#edit_3_addendum').css('display', 'none');
                    $('#edit_4_addendum').css('display', 'none');
                    $('#edit_5_addendum').css('display', 'none');
                    $('#edit_6_addendum').css('display', 'none');
                    // simpan
                    $('#simpan_1_addendum').css('display', 'none');
                    $('#simpan_2_addendum').css('display', 'none');
                    $('#simpan_3_addendum').css('display', 'none');
                    $('#simpan_4_addendum').css('display', 'none');
                    $('#simpan_5_addendum').css('display', 'block');
                }
            }
        })
    }
    var form_tambah_addendum_hps_penyedia_kontrak_mc = $('#form_tambah_addendum_hps_penyedia_kontrak_mc')

    function save_hps_penyedia_kontrak_mc_6_addendum(simpan) {
        if (simpan == 'simpan') {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/tambah_hps_penyedia_kontrak_mc_6_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        } else {
            $.ajax({
                method: "POST",
                url: "<?= base_url('taggihan_kontrak_admin/tagihan_kontrak/edit_hps_penyedia_kontrak_mc_6_addendum') ?>",
                data: form_tambah_addendum_hps_penyedia_kontrak_mc.serialize(),
                dataType: "JSON",
                success: function(response) {
                    if (response['success'] == 'success') {
                        modal_tambah_dkh_addendum.modal('hide');
                        message('success', 'Data Berhasil Di Simpan!', 'Berhasil')
                        location.reload()
                    }
                }
            })
        }

    }
</script>

<script>
    document.getElementById("volume").onkeyup = function() {
        var validasiHuruf = /^[a-zA-Z ]+ $ /;
        var validasisimbol = /[^0-9]/;
        var volume = $('#volume').val();
        if (volume.match(validasiHuruf)) {
            $('#volume').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#volume').val('');
        } else if (volume.match(validasisimbol)) {
            $('#volume').css('border-color', 'red');
            message('warning', 'Isi Hanya Dengan Angka', 'Maaf')
            $('#volume').val('');
        } else {
            $('#volume').css('border-color', 'green');
            $('#volume').val(volume);

        }

    };
</script>

<script>
    $("#harga_satuan_hps2").keyup(function() {
        var tanpa_rupiah = document.getElementById('tanpa-rupiah-uang-muka2');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');
        /* Fungsi */
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }
    });
</script>

<script>
    $(document).ready(function() {
        var table = $('#tabledetail').DataTable({
            "ordering": false,
            dom: 'Blfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 Rows', '25 Rows', '50 Rows', 'Back']
            ],
            dom: 'Bfrtip',
            buttons: [{
                extend: 'pdf',
                text: ' Export a PDF'
            }, {
                extend: 'csv',
                text: ' Export a CSV'
            }, {
                extend: 'excel',
                text: ' Export a EXCEL'
            }, 'pageLength'],
        });
        table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

    });

    $(document).ready(function() {
        var table = $('.tabledetail').DataTable({
            select: true,
            "ordering": false,
            dom: 'Blfrtip',
            columnDefs: [{
                    target: 0,
                    visible: false,
                },
                {
                    target: 1,
                    visible: false,
                },
            ],
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 Rows', '25 Rows', '50 Rows', 'Back']
            ],
            dom: 'Bfrtip',
            buttons: [{
                extend: 'pdf',
                text: ' Export a PDF'
            }, {
                extend: 'csv',
                text: ' Export a CSV'
            }, {
                extend: 'excel',
                exportOption: {
                    columns: [0, 1, 2, 3]
                },
                text: ' Export a EXCEL'
            }, 'pageLength'],
        });
        table.buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

    });
</script>

<script>
    function NilaiManipulasiMc() {
        var cek_um = $('[name="cek_um"]').val();
        if (cek_um == 'um') {
            $('.no_mc_manipulasi_um').css('display', 'block');
            $('.no_mc_manipulasi_number').css('display', 'none');
        } else {
            $('.no_mc_manipulasi_um').css('display', 'none');
            $('.no_mc_manipulasi_number').css('display', 'block');
        }
    }

    function jika_mc_number() {
        var no_mc_manipulasi = $('[name="no_mc_manipulasi"]').val();
        if (no_mc_manipulasi == 'Um' || no_mc_manipulasi == 1) {
            $('[name="sd_bulan_lalu"]').val('');
            $('.sd_bln_lalu').css('display', 'none');
        } else {
            $('.sd_bln_lalu').css('display', 'block');
        }
    }
</script>