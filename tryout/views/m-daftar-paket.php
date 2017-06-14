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
                <div class="page-content" style="margin-right: 10px; margin-left: 10px;">

                    <h3 class="text-center" style="color: white">Daftar Paket TO yang Belum Dikerjakan</h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php if ($paket==array()): ?>
                                <div class="col-md-12">
                                    <h5 class="text-center">Belum ada paket Try Out.</h5>
                                </div>
                            <?php else: ?>
                                <?php foreach ($paket as $paketitem):?>
                                    <blockquote>
                                        Nama Paket : <?=$paketitem['nm_paket'] ?><br>
                                        Status : Belum Dikerjakan<br>
                                        <?php if ($status_to=='doing'): ?>
                                            <a onclick="kerjakan(<?=$paketitem['id_paket']?>)" data-todo='<?=json_encode($paketitem)?>' class="button button-big js-form-submit button-fill button-primary modal-on<?=$paketitem['id_paket']?>"><i class="fa fa-pencil-square-o"></i>Kerjakan</a>
                                        <?php elseif ($status_to=='done'): ?>
                                            <a onclick="habis()" disable data-todo='<?=json_encode($paketitem)?>' class="button button-small js-form-submit button-fill button-primary modal-on<?=$paketitem['id_paket']?>" style="width: 50px;"><i class="fa fa-times"></i></a>
                                        <?php else: ?>
                                            <a onclick="forbiden()" disable data-todo='<?=json_encode($paketitem)?>' class="button button-big js-form-submit button-fill button-primary modal-on<?=$paketitem['id_paket']?>"><i class="fa fa-times"></i></a>
                                        <?php endif ?>
                                    </blockquote>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>

                    <h3 class="text-center" style="color: white">Paket Soal yang Sudah Dikerjakan</h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php if ($paket_dikerjakan==array()): ?>
                                <div class="col-md-12">
                                    <h5 class="text-center">Belum ada paket Try Out.</h5>
                                </div>
                            <?php else: ?>
                                <?php foreach ($paket_dikerjakan as $paketitem):?>
                                    <blockquote>
                                        Nama Paket : <?=$paketitem['nm_paket'] ?><br>
                                        <a onclick="detail_paket(<?=$paketitem['id_paket']?>)" data-todo='<?=json_encode($paketitem)?>' title="Lihat Score" class="button button-small js-form-submit button-fill button-primary modal-on<?=$paketitem['id_paket']?>" style="margin-bottom: 5px;">Score</a>
                                        <?php if ($status_to=="done"): ?>
                                            <a onclick="pembahasanto(<?=$paketitem['id_paket']?>)" data-todo='<?=json_encode($paketitem)?>' title="Pembahasan" class="button button-small js-form-submit button-fill button-primary">Pembahasan</a>
                                        <?php endif; ?>
                                    </blockquote>
                                    <hr>
                                <?php endforeach ?>
                            <?php endif ?>
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

    function detail_paket(id_paket){
      window.location.href = base_url + "tryout/score/"+id_paket;
    }

    function pembahasanto(id_to){
        var kelas = ".modal-on"+id_to;
        var data_to = $(kelas).data('todo');
        url = base_url+"index.php/tryout/buatpembahasan";

        var datas = {
          id_paket:data_to.id_paket,
          id_tryout:data_to.id_tryout,
          id_mm_tryoutpaket:data_to.id
        }

        $.ajax({
          url : url,
          type: "POST",
          data: datas,
          dataType: "TEXT",
          success: function(data)
          {
            window.location.href = base_url + "index.php/tryout/mulaipembahasan";
          },
            error: function (jqXHR, textStatus, errorThrown)
          {
            swal("gagal");
        }
      });
  }
</script>