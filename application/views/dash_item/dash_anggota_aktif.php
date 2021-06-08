<div class="col-md-6">
    <div class="box box-success">
        <div class="box-body bg-success">
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