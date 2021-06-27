<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-book text-success"> </i> <?= $title_web; ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>">
                    <i class="fa fa-dashboard"></i>&nbsp; Dashboard</a>
            </li>
            <li class="active"><i class="fa fa-file-text"></i>&nbsp; <?= $title_web; ?></li>
        </ol>
    </section>


    <section class="content">
        <?php if (!empty($this->session->flashdata())) {
            echo $this->session->flashdata('pesan');
        } ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="box box-success">
                            <div class="box-header with-border bg-success">
                                <h4>Pilih Range Tanggal</h4>
                            </div>
                            <form method="post" action="<?= base_url('laporan/pinjam_baru_hasil'); ?>" target="blank" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                <div class="box-body"><br /><br />
                                    <div class="form-group">
                                        <label for="tgl_mulai" class="col-sm-4" style="text-align: right;">Dari Tanggal </label>
                                        <div class="col-sm-8">
                                            <input type="date" name="tgl_start" class="form-control" id="tgl_mulai" placeholder="Mulai" required>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                    <div class="form-group">
                                        <label for="tgl_sampai" class="col-sm-4" style="text-align: right;">Sampai dengan Tanggal </label>
                                        <div class="col-sm-8">
                                            <input type="date" name="tgl_end" class="form-control" id="tgl_sampai" placeholder="Sampai" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success pull-right">
                                        <i class="fa fa-print"></i> Print
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>