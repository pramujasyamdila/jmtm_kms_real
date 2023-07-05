<div class="page-header">
    <h1>
        <i class="menu-icon fa fa-calendar"></i>
        Laporan Keseluruhan
        <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            Laporan Triwulan Keseluruhan
        </small>
    </h1>
</div><!-- /.page-header -->

<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="row">
            <div class="space-2"></div>
            <div class="col-sm-12 widget-container-col ui-sortable" id="widget-container">
                <div class="widget-box widget-color-blue3" id="widget-box">
                    <div class="widget-header">
                        <h5 class="widget-title bigger lighter">
                            <span class="white center">
                                <h5>
                                    <i class="ace-icon fa fa-table"></i>
                                    Data Tabel - Laporan Keseluruhan
                                </h5>
                            </span>
                        </h5>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="pull-right tableTools-container"></div>
                    <div class="pull-left">
                        <!-- <div class="form-group">
                            <div class="">
                                <select name="data_triwulan" class="form-control" id="form-field-select-1" placeholder="Pilih Triwulan...">
                                    <option value="1">Januari - Maret</option>
                                    <option value="2">April - Juni</option>
                                    <option value="3">Juli - September</option>
                                    <option value="4">Oktober - Desember</option>
                                </select>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <div class="">
                                <label for="">Tahun Awal</label>
                                <select name="tahun" class="form-control" id="form-field-select-1" placeholder="Pilih Triwulan...">
                                    <option value="2002">2002</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>

                                <label for="">Tahun Akhir</label>
                                <select name="tahun_akhir" class="form-control" id="form-field-select-1" placeholder="Pilih Triwulan...">
                                    <option value="">--pilih--</option>
                                    <option value="2002">2002</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                </select>
                            </div>
                        </div>
                        <label for="">Kondisi</label>
                        <div class="form-group">
                            <div class="">
                                <select name="sts_terkini" class="form-control" id="form-field-select-1" placeholder="Pilih Triwulan...">
                                    <option value="">--Pilih--</option>
                                    <option value="Baik">Baik</option>
                                    <option value="Rusak">Rusak</option>
                                </select>
                            </div>
                        </div>
                        <label for="">Lokasi</label>
                        <div class="form-group">
                            <div class="">
                                <select name="ruangan" class="form-control" id="form-field-select-1" placeholder="Pilih Triwulan..." onchange="get_nama_lokasi()">
                                    <option value="">--Pilih--</option>
                                    <?php foreach ($lokasi as $key => $value) { ?>
                                        <option value="<?= $value['kd_lokasi'] ?>"><?= $value['nm_lokasi'] ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" id="nama_lokasi" name="nama_lokasi">
                        <input type="hidden" id="nm_lokasi">
                        <a href="javascript:;" onclick="filter_triwulan()" class="btn btn-sm btn-primary"> <i class="fas fa fa-refresh"></i> Filter</a>

                    </div>
                </div>
                <div>
                    <table id="dynamic-table" class="table table-striped table-bordered table-hover table table-bordered exportable">
                        <thead>
                            <tr>
                                <th rowspan="2">No.</th>
                                <th rowspan="2" class="sorting_disabled">
                                    <i class="ace-icon fa fa-barcode bigger-110 hidden-480"></i>
                                    Nomor Inventaris / Kode Barang
                                </th>
                                <th rowspan="2" class="sorting_disabled">

                                    Jenis Barang
                                </th>
                                <th colspan="2" class="center">
                                    <span class="blue">
                                        Klasifikasi
                                    </span>
                                </th>
                                <th rowspan="2" class="sorting_disabled">

                                    Kondisi
                                </th>
                                <th rowspan="2" class="sorting_disabled">

                                    Nilai Perolehan
                                </th>
                                <th rowspan="2" class="sorting_disabled">

                                    Lokasi Barang
                                </th>
                                <th rowspan="2" class="sorting_disabled">

                                    Tanggal Perolehan
                                </th>


                            </tr>
                            <tr>
                                <th class="sorting_disabled">
                                    Bergerak / Tdk. Bergerak
                                </th>
                                <th class="sorting_disabled">
                                    Kelompok Barang
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
                <div class="widget-box widget-color-blue3" id="widget-box">
                    <div class="widget-header"></div>
                </div>
            </div>
        </div>
        <div id="modal-detail" class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="widget-box widget-color-purple" id="widget-box">
                            <div class="widget-header">
                                <h5 class="widget-title bigger lighter">
                                    <span class="white center">
                                        <h5>
                                            <i class="ace-icon fa fa-eye"></i>
                                            Detail Data Penghapusan
                                        </h5>
                                    </span>
                                </h5>
                            </div>
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="row">
                                        <div class="modal-body">
                                            <form class="form-horizontal" role="form">
                                                <div class="table-detail">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-2">
                                                            <div class="text-center">
                                                                <img height="100" class="thumbnail inline no-margin-bottom" src="<?= base_url() ?>assets/ace/images/avatars/dellv2.jpg" />
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-10">
                                                            <div class="space visible-xs"></div>
                                                            <div class="profile-user-info profile-user-info-striped">
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Kode
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-qrcode light-red bigger-100"></i>
                                                                        <span>12.01/0001/18</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Tgl. Peroleh
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-calendar light-red bigger-100"></i>
                                                                        <span>27/01/2018</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Tgl. hapus
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-calendar light-red bigger-100"></i>
                                                                        <span>27/01/2022</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Ket / Spek.
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-info-circle light-red bigger-100"></i>
                                                                        <span>Laptop Asus Veistro 14 Core i3</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Perolehan
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-tag light-red bigger-100"></i>
                                                                        <span>10,000,000,00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Penyusutan
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-tags light-red bigger-100"></i>
                                                                        <span>10,000,000,00</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Thn. Berjalan
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-plus light-red bigger-100"></i>
                                                                        <span>4</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Lokasi
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-map-marker light-red bigger-100"></i>
                                                                        <span>Area Jakarta-Tangerang-Cikampek</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-info-row">
                                                                    <div class="profile-info-name">
                                                                        Ruangan
                                                                    </div>
                                                                    <div class="profile-info-value">
                                                                        <i class="fa fa-home light-red bigger-100"></i>
                                                                        <span>Ruangan Staff</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-danger" data-dismiss="modal">
                                                <i class="ace-icon fa fa-ban"></i>
                                                Batal / Kembali
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->