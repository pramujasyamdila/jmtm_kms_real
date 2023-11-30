<script>
  // sweetalert
  function message(icon, text, title) {
    Swal.fire({
      title: title,
      text: text,
      icon: icon,
    });
  }


  var form_pendaptan = $('#form_pendaptan');
  var tambah_pendaptan = $('#tambah_pendaptan');

  function TambahPendapatan() {
    var id_kontrak = $('[name="id_kontrak_cari"]').val();
    $.ajax({
      method: "POST",
      url: "<?= base_url('admin/analisa_tagihan/add_pendapatan') ?>",
      data: form_pendaptan.serialize(),
      dataType: "JSON",
      success: function(response) {
        if (response == 'success') {
          tambah_pendaptan.modal('hide');
          message('success', 'Berhasil', 'Berhasil Di Tambah!')
          location.reload()
        } else {}
      }
    })
  }
</script>
<script>
  Result_kontrak()

  function Result_kontrak() {
    var tahun_kontrak = $('[name="tahun_kontrak"]').val();
    var id_departemen = $('[name="id_departemen"]').val();
    var id_area = $('[name="id_area"]').val();
    var id_sub_area = $('[name="id_sub_area"]').val();
    var id_kontrak_filter = $('[name="id_kontrak_filter"]').val();
    $.ajax({
      method: "POST",
      url: "<?= base_url('admin/analisa_tagihan/result_kontrak') ?>",
      dataType: "JSON",
      beforeSend: function() {
        $('.loader').css('display', 'block');
      },
      data: {
        id_kontrak_filter: id_kontrak_filter,
        id_departemen: id_departemen,
        id_area: id_area,
        id_sub_area: id_sub_area,
        tahun_kontrak: tahun_kontrak,
      },
      success: function(response) {
        $('.loader').css('display', 'none');
        $('[name="tahun_kontrak"]').val(tahun_kontrak);
        var html = '';
        var i;
        var start = response.start;
        for (i = 0; i < response['result_kontrak'].length; ++i) {
          html +=
            '<tr>' +
            '<td class = "tg-d2hi">' + (i + 1) + '</td>' +
            '<td class = "tg-d2hi">' + response['result_kontrak'][i].nama_kontrak + ' </td> ' +
            '<td class = "tg-d2hi">' + response['result_kontrak'][i].tahun_anggaran + ' </td> ' +
            '<td class = "tg-d2hi"><a style="font-size:10px" class="btn btn-sm btn-block btn-primary text-white" href="<?= base_url('admin/analisa_tagihan/filter_kontrak_grafik/') ?>' + response['result_kontrak'][i].id_kontrak + '"><i class="fa fa-file" aria-hidden="true"></i> Manage</a></td> ' +
            '</tr>';
        }
        $('.result_kontrak').html(html);

      }
    })
  }

  function Pilter_kontrak() {
    var id_kontrak_filter = $('[name="id_kontrak_filter"]').val();
    var tahun_kontrak = $('[name="tahun_kontrak"]').val();
    var id_departemen = $('[name="id_departemen"]').val();
    var id_area = $('[name="id_area"]').val();
    var id_sub_area = $('[name="id_sub_area"]').val();
    $.ajax({
      method: "POST",
      url: "<?= base_url('admin/analisa_tagihan/result_kontrak') ?>",
      dataType: "JSON",
      beforeSend: function() {
        $('.loader').css('display', 'block');
      },
      data: {
        id_kontrak_filter: id_kontrak_filter,
        id_departemen: id_departemen,
        id_area: id_area,
        id_sub_area: id_sub_area,
        tahun_kontrak: tahun_kontrak,
      },
      success: function(response) {
        $('.loader').css('display', 'none');
        $('[name="tahun_kontrak"]').val(tahun_kontrak);
        var html = '';
        var i;
        var start = response.start;
        for (i = 0; i < response['result_kontrak'].length; ++i) {
          html +=
            '<tr>' +
            '<td class = "tg-d2hi">' + (i + 1) + '</td>' +
            '<td class = "tg-d2hi">' + response['result_kontrak'][i].nama_kontrak + ' </td> ' +
            '<td class = "tg-d2hi">' + response['result_kontrak'][i].tahun_anggaran + ' </td> ' +
            '<td class = "tg-d2hi"><a style="font-size:10px" class="btn btn-sm btn-block btn-primary text-white" href="<?= base_url('admin/analisa_tagihan/filter_kontrak_grafik/') ?>' + response['result_kontrak'][i].id_kontrak + '"><i class="fa fa-file" aria-hidden="true"></i> Manage</a></td> ' +
            '</tr>';
        }
        $('.result_kontrak').html(html);
      }
    })
  }
</script>
<script>
  datagrafik()
  function datagrafik() {
    var tahun_kontrak = $('[name="tahun_kontrak"]').val();
    var id_kontrak = $('[name="id_kontrak"]').val();
    var id_departemen = $('[name="id_departemen"]').val();
    var id_area = $('[name="id_area"]').val();
    var id_sub_area = $('[name="id_sub_area"]').val();
    $.ajax({
      method: "POST",
      url: "<?= base_url('admin/analisa_tagihan/result_by_id_kontrak_awal_global') ?>",
      data: {
        tahun_kontrak: tahun_kontrak,
        id_departemen: id_departemen,
        id_area: id_area,
        id_sub_area: id_sub_area,
        id_kontrak: id_kontrak
      },
      dataType: "JSON",
      success: function(response) {
        $('#filter_kontrak').modal('hide');
        // januari
        var januari = response['data_filter'].januari;
        var januari_pendapatan = response['data_filter'].januari_pendapatan;
        // februari
        var februari = response['data_filter'].februari;
        var februari_pendapatan = response['data_filter'].februari_pendapatan;

        var maret = response['data_filter'].maret;
        var maret_pendapatan = response['data_filter'].maret_pendapatan;

        var april = response['data_filter'].april;
        var april_pendapatan = response['data_filter'].april_pendapatan;

        var mei = response['data_filter'].mei;
        var mei_pendapatan = response['data_filter'].mei_pendapatan;

        var juni = response['data_filter'].juni;
        var juni_pendapatan = response['data_filter'].juni_pendapatan;

        var juli = response['data_filter'].juli;
        var juli_pendapatan = response['data_filter'].juli_pendapatan;

        var agustus = response['data_filter'].agustus;
        var agustus_pendapatan = response['data_filter'].agustus_pendapatan;

        var september = response['data_filter'].september;
        var september_pendapatan = response['data_filter'].september_pendapatan;

        var oktober = response['data_filter'].oktober;
        console.log(oktober);
        var oktober_pendapatan = response['data_filter'].oktober_pendapatan;

        var november = response['data_filter'].november;
        var november_pendapatan = response['data_filter'].november_pendapatan;

        var desember = response['data_filter'].desember;
        var desember_pendapatan = response['data_filter'].desember_pendapatan;

        var ctx = document.getElementById("barChart").getContext('2d');
        var open_modal_diagram = $('#open_modal_diagram');
        var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: 'Pendapatan',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [januari_pendapatan, februari_pendapatan, maret_pendapatan, april_pendapatan, mei_pendapatan, juni_pendapatan, juli_pendapatan, agustus_pendapatan, september_pendapatan, oktober_pendapatan, november_pendapatan, desember_pendapatan]
              },
              {
                label: 'Pencairan',
                backgroundColor: 'rgba(210, 214, 222, 1)',
                borderColor: 'rgba(210, 214, 222, 1)',
                pointRadius: false,
                pointColor: 'rgba(210, 214, 222, 1)',
                pointStrokeColor: '#c1c7d1',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data: [januari, februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember]
              }
            ]
          },

          options: {
            hover: {
              mode: false
            },
            scales: {
              yAxes: [{
                ticks: {
                  // Return an empty string to draw the tick line but hide the tick label
                  // Return `null` or `undefined` to hide the tick line entirely
                  userCallback: function(value, index, values) {
                    // Convert the number to a string and splite the string every 3 charaters from the end
                    value = value.toString();
                    value = value.split(/(?=(?:...)*$)/);
                    // Convert the array to a string and format the output
                    value = value.join('.');
                    return 'Rp.' + value;
                  }
                }
              }]
            },
            onClick: function(e) {
              var activePoints = myChart.getElementsAtEvent(e);
              var selectedIndex = activePoints[0]._index;
              open_modal_diagram.modal('show');
              var tahun_kontrak = $('[name="tahun_kontrak"]').val();
              var bulan = activePoints[0]['_model'].label;
              $('#label_diagram').html(bulan);
              var pendapatan = activePoints[0]['_model'].datasetLabel;
              var pencairan = activePoints[1]['_model'].datasetLabel;
              var table_pencairan = $('#table_pencairan');
              var table_pendapatan = $('#table_pendapatan');
              // pendaptan
              table_pendapatan.DataTable({
                "responsive": false,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,
                "bDestroy": true,
                "order": [],
                "ajax": {
                  "url": "<?= base_url('admin/analisa_tagihan/get_data_pendapatan') ?>",
                  "type": "POST",
                  data: {
                    tahun_kontrak: tahun_kontrak,
                    bulan: bulan,
                    id_kontrak: id_kontrak,
                    id_departemen: id_departemen,
                    id_area: id_area,
                    id_sub_area: id_sub_area,
                    pendapatan: pendapatan
                  },
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
                  "sZeroRecords": "Tidak Ada Data  Yang Di Cari",
                  "sProcessing": "Memuat Data...."
                }
              });
              // pencairan
              table_pencairan.DataTable({
                "responsive": false,
                "autoWidth": false,
                "processing": true,
                "serverSide": true,
                "bDestroy": true,
                "order": [],
                "ajax": {
                  "url": "<?= base_url('admin/analisa_tagihan/get_data_pencairan') ?>",
                  "type": "POST",
                  data: {
                    tahun_kontrak: tahun_kontrak,
                    bulan: bulan,
                    id_kontrak: id_kontrak,
                    id_departemen: id_departemen,
                    id_area: id_area,
                    id_sub_area: id_sub_area,
                    pencairan: pencairan
                  },
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
                  "sZeroRecords": "Tidak Ada Data  Yang Di Cari",
                  "sProcessing": "Memuat Data...."
                }
              })
            }
          }
        })
      }
    })
  }
</script>

<script>
  $(document).ready(function() {
    $('#table').DataTable({});
  });
</script>
<script>
  $("#nilai_pendapatan").keyup(function() {
    var harga = $("#nilai_pendapatan").val();
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