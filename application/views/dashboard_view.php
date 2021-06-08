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
    <?php
    $this->load->view('dash_item/dash_utama');  // Dashboard Utama
    $this->load->view('dash_item/dash_grafik'); // Dashboard Grafik
    ?>
    <div class="row">
      <?php
      $this->load->view('dash_item/dash_anggota_aktif'); // Anggota Aktif (foto)
      $this->load->view('dash_item/dash_buku_aktif'); // Buku terbanyak dipinjam
      $this->load->view('dash_item/dash_aktif_meminjam'); // Anggota yang sering meminjam berapa kali?
      $this->load->view('dash_item/dash_buku_terbaru'); // buku terbaru
      ?>
    </div>
  </section>
</div>
<!-- /.content -->