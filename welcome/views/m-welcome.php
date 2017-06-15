<!-- Views -->
<div class="views">
    <div class="view view-main">

        <div class="navbar navbar-clear">
            <div class="navbar-inner">
                <div class="left">
                    <a href="#" class="link icon-only open-panel">
                        <span class="kkicon icon-menu"></span>
                    </a>
                </div>
                <div class="center sliding">{judul_header}</div>
                <div class="right">
                    <a href="#" class="link icon-only open-panel" data-panel="right">
                        <span class="kkicon icon-user"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="pages navbar-fixed toolbar-fixed">
            <div class="page page-bg">
                <div class="page-content">
                <div class="content-block mb-15">

                <div style="background-color: white">
                    <!-- SD -->
                    <div class="accordion-item">
                        <div class="accordion-item-toggle">
                            <strong>Sekolah Dasar</strong>
                        </div>
                        <?php foreach ($pelajaran_sd as $pelajaran_items): ?>
                            <div class="accordion-item-content">
                                <a onclick="daftarallvideo(<?=$pelajaran_items->id?>)" class="text-info""><?= $pelajaran_items->namaMataPelajaran ?></a>
                            </div>
                        <?php endforeach ?>
                        <?php if ($pelajaran_sd == array()): ?>
                            <h6 style="color:orange;">Belum Tersedia Video Pembelajaran !</h6>
                        <?php endif ?>
                    </div>
                    <!-- / SD -->
                    <!-- SMP -->
                    <div class="accordion-item">
                        <div class="accordion-item-toggle">
                            <strong>Sekolah Menengah Pertama</strong>
                        </div>
                        <?php foreach ($pelajaran_smp as $pelajaran_items): ?>
                            <div class="accordion-item-content">
                                <a onclick="daftarallvideo(<?=$pelajaran_items->id?>)" class="text-info"><?= $pelajaran_items->namaMataPelajaran ?></a>
                            </div>
                        <?php endforeach ?>
                        <?php if ($pelajaran_smp == array()): ?>
                            <div class="accordion-item-content">
                                <p style="color:orange;">Belum Tersedia Video Pembelajaran !</p>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- / SMP -->
                    <!-- SMA -->
                    <div class="accordion-item">
                        <div class="accordion-item-toggle">
                            <strong>Sekolah Menengah Atas</strong>
                        </div>
                        <?php foreach ($pelajaran_sma as $pelajaran_items): ?>
                            <div class="accordion-item-content">
                                <a onclick="daftarallvideo(<?=$pelajaran_items->id?>)" class="text-info"><?= $pelajaran_items->namaMataPelajaran ?></a>
                            </div>
                        <?php endforeach ?>
                        <?php if ($pelajaran_sma == array()): ?>
                            <div class="accordion-item-content">
                                <p style="color:orange;">Belum Tersedia Video Pembelajaran !</p>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- / SMA -->
                    <!-- SMA IPA -->
                    <div class="accordion-item">
                        <div class="accordion-item-toggle">
                            <strong>Sekolah Menengah Atas - IPA</strong>
                        </div>
                        <?php foreach ($pelajaran_sma_ipa as $pelajaran_items): ?>
                            <div class="accordion-item-content">
                                <a onclick="daftarallvideo(<?=$pelajaran_items->id?>)" class="text-info"><?= $pelajaran_items->namaMataPelajaran ?></a>
                            </div>
                        <?php endforeach ?>
                        <?php if ($pelajaran_sma_ipa == array()): ?>
                            <div class="accordion-item-content">
                                <p style="color:orange;">Belum Tersedia Video Pembelajaran !</p>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- / SMA IPA -->
                    <!-- SMA IPS -->
                    <div class="accordion-item">
                        <div class="accordion-item-toggle">
                            <strong>Sekolah Menengah Atas - IPS</strong>
                        </div>
                        <?php foreach ($pelajaran_sma_ips as $pelajaran_items): ?>
                            <div class="accordion-item-content">
                                <a onclick="daftarallvideo(<?=$pelajaran_items->id?>)" class="text-info"><?= $pelajaran_items->namaMataPelajaran ?></a>
                            </div>
                        <?php endforeach ?>
                        <?php if ($pelajaran_sma_ips == array()): ?>
                            <div class="accordion-item-content">
                                <p style="color:orange;">Belum Tersedia Video Pembelajaran !</p>
                            </div>
                        <?php endif ?>
                    </div>
                    <!-- / SMA IPS -->
                </div>

                </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function daftarallvideo(id) {
        window.location.href = base_url + "video/daftarallvideo/"+id;
    }
</script>