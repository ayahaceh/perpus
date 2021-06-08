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