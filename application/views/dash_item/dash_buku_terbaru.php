<div class="col-md-6">
    <div class="box box-success">
        <!-- /.box-header -->
        <div class="box-body">
            <p class="text-center">
                <strong>Buku terbaru</strong>
            </p>
            <ul class="products-list product-list-in-box">
                <?php foreach ($terbaru as $ag) {
                    $foto = $ag['sampul'];
                    if ($foto == "") {
                        $foto = 'buku_default.jpg';
                    }
                ?>
                    <li class="item">
                        <div class="product-img">
                            <img src="<?php echo base_url(); ?>assets_style/image/<?php echo $foto; ?>" alt="Product Image">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title"><?= $ag['title'] ?>
                                <span class="label label-success pull-right"><?= $ag['buku_id'] ?></span></a>
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