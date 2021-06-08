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
      <div class="col-md-12">
        <div class="box box-success">
          <!-- <div class="box-header with-border">
            <h3 class="box-title">Grafik jumlah peminjam</h3>
          </div> -->
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <p class="text-center">
                <strong>Grafik jumlah Buku Terpinjam Tahun 2021</strong>
              </p>

              <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="bulanChart" style="height: 180px;"></canvas>
              </div>
              <!-- /.chart-responsive -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">

      <!-- WIDGED FOTO  -->
      <div class="col-md-6">
        <div class="box box-success">
          <div class="box-body">
            <p class="text-center">
              <strong>Anggota Paling Aktif</strong>
            </p>
            <ul class="users-list clearfix">
              <?php foreach ($foto as $ag) {
                $fotonya = $ag['foto'];
                if ($fotonya == "") {
                  $fotonya = 'default.png';
                }
              ?>
                <li>
                  <img src="<?php echo base_url(); ?>assets_style/image/<?php echo $fotonya; ?>" class="img-responsive" style="height: 90px;width:auto;" alt="User Image">
                  <a class="users-list-name" href="#"><?= $ag['nama'] ?> </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- AKHIR WIDGED FOTO  -->


      <!-- WIDGED BUKU  -->
      <div class="col-md-6">
        <div class="box box-success">
          <!-- <div class="box-header bg-info">
            <h4 class="text-primary">Buku paling sering dipinjam</h4>
          </div> -->
          <div class="box-body">
            <p class="text-center">
              <strong>Buku paling sering dipinjam</strong>
            </p>
            <?php foreach ($buku as $b) {
              // Persentase Dipinjam 
              $pembagi  = 10;
              $angka_buku = $b['jumlah_dipinjam'];
              $persen = ($angka_buku / $pembagi) * 100;
              // Warna progress
              if ($angka_buku > 3) {
                $warna = 'success';
              } elseif ($angka_buku > 10) {
                $warna = 'primary';
              } else {
                $warna = 'aqua';
              }
            ?>
              <div class="progress-group">
                <span class="progress-text"><?= $b['title'] ?></span>
                <span class="progress-number"><b><?= $angka_buku ?></b>/<?= $pembagi ?></span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-<?= $warna ?>" style="width: <?= $persen ?>%"></div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="box-footer">

          </div>
        </div>
      </div>
      <!-- AKHIR WIDGED BUKU  -->


      <!-- WIDGED SERING MEMINJAM  -->
      <div class="col-md-6">
        <div class="box box-success">
          <div class="box-body">
            <p class="text-center">
              <strong>Anggota Paling Aktif meminjam</strong>
            </p>
            <?php foreach ($anggota as $ag) {
              // Persentase Dipinjam 
              $pembagi    = 10;
              $angka_anggota = $ag['jumlah_meminjam'];
              $persen = ($angka_anggota / $pembagi) * 100;
              // Warna progress
              if ($angka_anggota > 4) {
                $warna = 'success';
              } elseif ($angka_anggota > 10) {
                $warna = 'primary';
              } else {
                $warna = 'aqua';
              }
            ?>
              <div class="progress-group">
                <span class="progress-text"><?= $ag['nama'] ?> </span>
                <!-- <span class="text-green"> [ # <?= $ag['anggota_id'] ?>]</span> -->

                <span class="progress-number"><b><?= $angka_anggota ?></b>/<?= $pembagi ?></span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-<?= $warna ?>" style="width: <?= $persen ?>%"></div>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="box-footer">

          </div>
        </div>
      </div>
      <!-- AKHIR WIDGED SERING MEMINJAM  -->

      <!-- WIDGED BUKU TERBARU  -->
      <div class="col-md-6">
        <div class="box box-success">
          <!-- /.box-header -->
          <div class="box-body">
            <ul class="products-list product-list-in-box">
              <?php foreach ($terbaru as $ag) {
                $foto = $ag['sampul'];
                if ($foto == "") {
                  $foto = 'default.png';
                }
              ?>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php echo base_url(); ?>assets_style/image/<?php echo $foto; ?>" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title"><?= $ag['title'] ?>
                      <span class="label label-warning pull-right"><?= $ag['buku_id'] ?></span></a>
                    <span class="product-description">
                      Pengarang : <?= $ag['pengarang'] ?> - Penerbit : <?= $ag['penerbit'] ?> , <?= $ag['thn_buku'] ?>
                    </span>
                  </div>
                </li>
              <?php } ?>
            </ul>
          </div>

        </div>
      </div>
      <!-- AKHIR WIDGED BUKU TERBARU  -->




    </div>


  </section>
</div>


<!-- /.content -->