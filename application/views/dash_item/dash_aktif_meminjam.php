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