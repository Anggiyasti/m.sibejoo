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

                    <h3 class="text-center" style="color: white">Silahkan pilih tingkat untuk melakukan latihan online!</h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <div style="margin-left: 20px; padding: 10px;">
                                <h3 class="text-center">Sekolah Dasar</h3>
                                <?php foreach ($sd as $pelajaran_sd): ?>
                                    <form action="<?= base_url() ?>index.php/tesonline/mulai" method="post" hidden="true">
                                        <input type="hiden" value="<?= $pelajaran_sd['tingpelID'] ?>" class="hide" name="id">
                                        <button type="submit" class="kirim<?= $pelajaran_sd['tingpelID'] ?>" data-todo='{"id":"<?= $pelajaran_sd['tingpelID'] ?>","namapelajaran":"<?= $pelajaran_sd['namaMataPelajaran'] ?>"}'>kirim
                                        </button>
                                    </form>
                                    <a href="javascript:submit(<?= $pelajaran_sd['tingpelID'] ?>);"><i class="fa fa-pencil-square-o"></i><?= $pelajaran_sd['namaMataPelajaran'] ?></a> <br>                                
                                <?php endforeach ?>
                            </div>
                            <div style="margin-left: 20px; padding: 10px;">
                                <h3 class="text-center">Sekolah Menengah Pertama</h3>
                                <?php foreach ($smp as $pelajaran_smp): ?>
                                    <form action="<?= base_url() ?>index.php/tesonline/mulai" method="post" hidden="true">
                                        <input type="hiden" value="<?= $pelajaran_smp['tingpelID'] ?>" class="hide" name="id">
                                        <button type="submit" class="kirim<?= $pelajaran_smp['tingpelID'] ?>" data-todo='{"id":"<?= $pelajaran_smp['tingpelID'] ?>","namapelajaran":"<?= $pelajaran_smp['namaMataPelajaran'] ?>"}'>kirim
                                        </button>
                                    </form>
                                    <a href="javascript:submit(<?= $pelajaran_smp['tingpelID'] ?>);"><i class="fa fa-pencil-square-o"></i><?= $pelajaran_smp['namaMataPelajaran'] ?></a> <br>                                
                                <?php endforeach ?>
                            </div>
                            <div style="margin-left: 20px; padding: 10px;">
                                <h3 class="text-center">Sekolah Menengah Atas</h3>
                                <?php foreach ($sma as $pelajaran_sma): ?>
                                    <form action="<?= base_url() ?>index.php/tesonline/mulai" method="post" hidden="true">
                                        <input type="hiden" value="<?= $pelajaran_sma['tingpelID'] ?>" class="hide" name="id">
                                        <button type="submit" class="kirim<?= $pelajaran_sma['tingpelID'] ?>" data-todo='{"id":"<?= $pelajaran_sma['tingpelID'] ?>","namapelajaran":"<?= $pelajaran_sma['namaMataPelajaran'] ?>"}'>kirim
                                        </button>
                                    </form>
                                    <a href="javascript:submit(<?= $pelajaran_sma['tingpelID'] ?>);"><i class="fa fa-pencil-square-o"></i><?= $pelajaran_sma['namaMataPelajaran'] ?> <br>                                
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function submit(id) {
        window.location.href = base_url + "index.php/tesonline/next/" + id;    
    }
</script>