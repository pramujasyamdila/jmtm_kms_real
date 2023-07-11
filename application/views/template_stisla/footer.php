<footer class="main-footer" style="background-color: #302B63;">
  <div class="footer-left" style="color: white;">
    Copyright &copy; 2022 <div class="bullet"></div>JASAMARGA TOLLROAD MAINTENANCE</a>
  </div>
  <div class="footer-right">

  </div>
</footer>
</div>
</div>

<!-- General JS Scripts -->
<script src="<?= base_url() ?>assets_stisla/modules/jquery.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/popper.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/tooltip.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/nicescroll/jquery.nicescroll.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/moment.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/js/stisla.js"></script>

<!-- JS Libraies -->
<script src="<?= base_url() ?>assets_stisla/modules/jquery.sparkline.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/chart.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/summernote/summernote-bs4.js"></script>
<script src="<?= base_url() ?>assets_stisla/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url() ?>assets_stisla/js/page/index.js"></script>
<!-- Page Specific JS File -->
<script src="<?= base_url() ?>assets_stisla/js/page/modules-ion-icons.js"></script>
<!-- Template JS File -->
<script src="<?= base_url() ?>assets_stisla/js/scripts.js"></script>
<script src="<?= base_url() ?>assets_stisla/js/custom.js"></script>

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

<script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.2.1/js/dataTables.fixedColumns.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="<?= base_url() ?>assets_stisla/modules/select2/dist/js/select2.full.min.js"></script>

<!-- Page Specific JS File -->
<script src="<?= base_url() ?>assets_stisla/js/page/forms-advanced-forms.js"></script>
<script>
  window.onload = function() {
    jam();
  }

  function jam() {
    var e = document.getElementById('jam'),
      d = new Date(),
      h, m, s;
    h = d.getHours();
    m = set(d.getMinutes());
    s = set(d.getSeconds());

    e.innerHTML = h + ':' + m + ':' + s;

    setTimeout('jam()', 1000);
  }

  function set(e) {
    e = e < 10 ? '0' + e : e;
    return e;
  }
</script>
</body>

</html>