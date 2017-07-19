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
                            <h1 class="text-center" style="color: red">Maaf anda tidak memiliki Token, silahkan lakukan permintaan pada admin untuk mengirim token.</h1>
                        </div>
                        <div class="col-100">
                            <input type="text" name="kode_token" style="width: 100%;margin-bottom: 10px" placeholder="Masukan Kode Token">
                            <a class="button button-small js-form-submit button-fill button-primary isi_button">Isi!</a>
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