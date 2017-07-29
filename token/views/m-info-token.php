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
                <div class="page-content" style="margin-right: 10px; margin-left: 10px;">

                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <h1 align="center">Hi, <span class="text-theme-color-2"><?=$this->session->userdata('USERNAME') ?> !</span></h1>
                            <?php if ($token == array()): ?>
                              <h3>Anda belum memiliki token</h3>
                            <?php else: ?>
                                <div class="row">
                                    <div class="col-40">
                                        Nomor Token <br>
                                        Jenis Donasi <br>
                                        Masa Aktif <br>
                                        Tanggal Aktif <br>
                                        Tanggal Berakhir <br>
                                        Sisa Aktif
                                    </div>
                                    <?php foreach ($token as $token_item) : ?>
                                        <div class="col-60">
                                            <?=$token_item['nomortoken'] ?><br>
                                            <?=$token_item['jenis']?> <br>
                                            <?=$token_item['masa_aktif']?> Hari <br>
                                            <?=$token_item['tgl_aktif']?> <br>
                                            <?=$token_item['tgl_expired']?> <br>
                                            <?=$token_item['sisa']?> Hari
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                        </div>
                        <div class="col-100">
                            <h3 class="text-center">Cara Mengisi Token</h3>
                            <p align="center">{pesan}</p>
                            <?php if ($this->session->userdata('sisa_token')>0): ?>
                                <input type="text" name="kode_token" class="form-control" style="width: 100%;margin-bottom: 10px" placeholder="Masukan Kode Token" disabled="">
                            <?php else: ?> 
                                <input type="text" name="kode_token" class="form-control" style="width: 100%;margin-bottom: 10px" placeholder="Masukan Kode Token">
                            <?php endif ?>
                            <a class="button button-small js-form-submit button-fill button-primary isi_button" href="#">Isi</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="">
    $('.isi_button').click(function(){
        kode_token = $('input[name=kode_token]').val();
        url = base_url+"token/isi_token";
        $.ajax({
            type:'POST',
            data:{kode_token:kode_token},
            url:base_url+"token/isi_token",
            dataType:"TEXT",
            success:function(data){
                if (data=="1") {     
                    swal('Token Berhasil di aktifkan, silahkan menikmati layanan kami !');
                   window.location = base_url+"welcome";
                }else{
                    swal('Kode Token salah');
                }
            },error:function(){
            }
        });
    })


</script>