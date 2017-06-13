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
                <div class="center sliding">Tryout</div>
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

                    <h2 class="text-center" style="color: white">Daftar Tryout</h2>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php foreach ($tryout as $tryout_item): ?>
                            <?php 
                                $date1 = new DateTime($tryout_item['tgl_mulai']);
                                $date2 = new DateTime($tryout_item['tgl_berhenti']);
                                $date3 = $date2->diff($date1);
                                $hariini = new DateTime(date("Y-m-d"));
                                $sisa = new stdClass();
                                if ($hariini>$date2) {
                                  $sisa->days = 0;
                                } else {
                                  $sisa = $date2->diff($hariini);
                                }
                              ?>
                            <div class="content-block mt-0 mb-0">
                                <blockquote>
                                    Nama TO : <?=$tryout_item['nm_tryout'] ?><br>
                                    Mulai : <?=$tryout_item['tgl_mulai']." ".$tryout_item['wkt_mulai'] ?><br>
                                    Berakhir : <?=$tryout_item['tgl_berhenti']." ".$tryout_item['wkt_berakhir']?> <br>
                                    Masa Berlaku : <?=$date3->d." Hari" ?> <br>
                                    Keaktivan : <?=$sisa->days ?> Hari
                                </blockquote>
                                <a onclick="lihat_detail(<?=$tryout_item['id_tryout'];?>)" class="button button-big js-form-submit button-fill button-primary">Lihat Paket Soal</a>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function paket() {
        window.location.href = base_url + "video";
    }
    function lihat_detail(id_to){
      window.location.href = base_url + "index.php/tryout/create_seassoin_idto/"+id_to;
    }
</script>