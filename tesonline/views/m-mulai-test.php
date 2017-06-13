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

                    <h3 class="text-center" style="color: white">Daftar Latihan <a onclick="latihan()" class="btn btn-gray btn-theme-colored hvr-icon-float-away">Buat Latihan&nbsp&nbsp</a></h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php if ($latihan == array()): ?>
                                <h4>Tidak ada latihan.</h4>
                            <?php else: ?>
                                <div class="content-block mt-0 mb-0">
                                    <?php foreach ($latihan as $latihanitem): ?>
                                        <blockquote>
                                            Nama Latihan : <?= $latihanitem['nm_latihan'] ?> <br>
                                            Level : <?= $latihanitem['tingkatKesulitan'] ?> <br>
                                            Jumlah Soal : <?= $latihanitem['jumlahSoal'] ?> <br>
                                            Tanggal Pengerjaan : <?= $latihanitem['date_created'] ?> <br>
                                            <a class="button button-smaall js-form-submit button-fill button-success detail-<?= $latihanitem['id_latihan'] ?>" title="Kerjakan" onclick="mulai_test(<?= $latihanitem['id_latihan'] ?>)"><i class="fa fa-pencil"></i> Kerjakan</a>
                                        </blockquote>
                                    <?php endforeach ?>  
                                </div>
                            <?php endif ?>
                        </div>
                    </div>

                    <h3 class="text-center" style="color: white">Daftar Report</h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php if ($report == array()): ?>
                                <h4>Tidak ada Report Latihan.</h4>
                            <?php else: ?>
                                <div class="content-block mt-0 mb-0">
                                    <?php foreach ($report as $reportitem): ?>
                                        <blockquote>
                                            Nama Latihan : <?= $reportitem['nm_latihan'] ?> <br>
                                            Level : <?= $reportitem['tingkatKesulitan'] ?> <br>
                                            Tanggal Pengerjaan : <?= $reportitem['tgl_pengerjaan'] ?> <br>
                                            <a class="button button-smaall js-form-submit button-fill button-success modal-on<?= $reportitem['id_latihan'] ?>" title="Lihat score" onclick="lihat_score(<?= $reportitem['id_latihan'] ?>)" data-todo='<?= json_encode($reportitem) ?>' style="margin-bottom: 5px;"><i class="fa fa-book"></i> Score</a>
                                            <a class="button button-smaall js-form-submit button-fill button-success modal-on<?= $reportitem['id_latihan'] ?>" onclick="mulai_pembahasan(<?= $reportitem['id_latihan'] ?>)" data-todo='<?= json_encode($reportitem) ?>'><i class="fa fa-book"></i> Pembahasan</a>
                                        </blockquote>
                                    <?php endforeach ?>  
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function mulai_pembahasan(id_pembahasan) {
        window.location.href = base_url + "index.php/latihan/create_session_id_pembahasan/" + id_pembahasan;
    }
    function mulai_test(id_latihan) {
        window.location.href = base_url + "index.php/latihan/create_session_id_latihan/" + id_latihan;
    }
    function lihat_score(id_latihan) {
        window.location.href = base_url + "index.php/tesonline/detail_score/" + id_latihan;
    }
    function latihan() {
        window.location.href = base_url + "tesonline";
    }
</script>