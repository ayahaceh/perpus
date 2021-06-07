<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php if ($this->session->userdata('level') == 'Anggota') {
  redirect(base_url('transaksi'));
} ?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-sm-12">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $count_pengguna; ?></h3>

              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="fa fa-edit"></i>
            </div>
            <a href="user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!--small box-->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $count_buku; ?></h3>

              <p>Jenis Buku</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="data" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $count_pinjam; ?></h3>

              <p>Pinjam</p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $count_kembali; ?></h3>

              <p>Di Kembalikan</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="transaksi/kembali" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="box">
          <div class="box-header bg-info">
            <h4 class="text-primary">Anggota paling aktif</h4>
          </div>
          <div class="box-body">
            <p class="text-center">
              <strong>Anggota Paling Aktif meminjam</strong>
            </p>

            <div class="progress-group">
              <span class="progress-text">Nama Anggota</span>
              <span class="progress-number"><b>160</b>/200</span>

              <div class="progress sm">
                <div class="progress-bar progress-bar-aqua" style="width: 60%"></div>
              </div>
            </div>

          </div>
          <div class="box-footer">

          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="box">
          <div class="box-header bg-info">
            <h4 class="text-primary">Buku paling sering dipinjam</h4>
          </div>
          <div class="box-body">
            <p class="text-center">
              <strong>Buku paling sering dipinjam</strong>
            </p>

            <div class="progress-group">
              <span class="progress-text">Judul Buku</span>
              <span class="progress-number"><b>110</b>/200</span>

              <div class="progress sm">
                <div class="progress-bar progress-bar-aqua" style="width: 50%"></div>
              </div>
            </div>

          </div>
          <div class="box-footer">

          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik jumlah peminjam</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <p class="text-center">
                <strong>Periode 1 Januari 2021 - 30 Juni 2021</strong>
              </p>

              <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="salesChart" style="height: 180px;"></canvas>
              </div>
              <!-- /.chart-responsive -->
            </div>
          </div>
        </div>
      </div>
    </div>




  </section>
</div>
<!-- /.content -->