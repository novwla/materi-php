<!-- =================================== -->
        <!-- =========END PAGINATION ============ -->
        <!-- =================================== -->
       
        <div class="pagination-wrapper">
            <div class="pagination">


                <!-- PREVIOUS -->
                 <?php if($halamanAktif > 1): ?>
                    <a href="?halaman=<?php echo $halamanAktif - 1; ?>" class="prev">
                        &larr; prev
                    </a>
                 <?php else: ?>
                    <span class="pagination-disabled"> &larr; Prev </span>
                 <?php endif; ?>
               


                <!-- NOMOR HALAMAN -->
                 <?php for($i=1; $i <= $jumlahHalaman; $i++ ): ?>
                    <?php if($i == $halamanAktif): ?>
                        <a href="?halaman=<?php echo $i; ?>" class="active">
                            <?php echo $i; ?>
                        </a>
                    <?php else: ?>
                        <a href="?halaman=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a>
                    <?php endif; ?>
                 <?php endfor; ?>


                <!-- NEXT -->
                 <?php if($halamanAktif < $jumlahHalaman): ?>
                    <a href="?halaman=<?php echo $halamanAktif + 1; ?>" class="next">
                       Next &rarr;
                    </a>
                <?php else: ?>
                    <span class="pagination-disabled"> Next &rarr;</span>
                <?php endif; ?>
            </div>
        </div>
