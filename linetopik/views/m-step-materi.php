<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/custom-time-line.css') ?>"/>
<link rel="stylesheet" href="<?= base_url('assets/cssnew/style.css') ?>"/>


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
                <div class="list-block mt-0 blog-box">
                <ul>
                <div class="row">
                <!-- Pencarian -->
               <div class="content-block mt-0 mb-0">
                    <div class="forms">
                            <div class="form-row">
                                <div class="input-text woocommerce-result-count">
                                <form method="get" class="search-form" action="<?=base_url()?>index.php/linetopik/cariTopik"  accept-charset="utf-8" enctype="multipart/form-data">
                                    <input type="search" class="ui-autocomplete-input" placeholder="Search"  name="keycari" title="Search for:" id="caritopik">
                                    <!-- <button type="submit" class="button" hidden="true" style="float: left;"><i class="fa fa-search"></i></button> -->
                                </form>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- /Pencarian -->
              </div>
            <div id="test">
            <div class="p-t-20" >
                <?php if ($datMateri==''): ?>
                    <h1 align="center" style="color:#F2184F; font-size: 10 !important;">UPS!</h1>
                    <h2 align="center">Maaf :(</h2>
                    <h2 align="center">Materi Belum Tersedia.</h2>
                <?php else: ?>
                <article style="margin-left:  10px;">
                    <div class="post-info" >
                        <div class="post-info-main">
                            <center>
                                <div class="author-post">Nama Materi:' <?= $datMateri['judulMateri']; ?> '</div>
                            </center>
                        </div>
                        <div class="comments-post">
                            <h1>Materi : </h1>
                        </div>
                    </div>
                    <p><?= $datMateri['isiMateri']; ?></p>
                </article>
              </div>
          </div>
            </ul>
                <ul>
            <div class="container activity p-l-r-20">
            <div class="row m-l-0">
              <div class="col"> 
              <!-- Start Time Line -->
              <?php 
              $i=0;
              foreach ($datline as $key ): ?>
                <div class="contact">
                 
                  <div class="dot z-depth-1" style="margin-left: 7px;" id="bulet-<?=$i;?>">
                  </div>
                  <div class="step">
                  <p>
                  <?php if ($key['icon'] == 'ico-movie'): ?>
                    <a onclick="stepvideo('<?=$key['uuid'];?>')" class="media-heading"  id="font-<?=$i;?>" ><?=$key['namaStep']?></a>
                  <?php elseif ($key['icon'] == 'ico-file6'): ?>
                    <a onclick="stepmateri('<?=$key['uuid'];?>')" class="media-heading"  id="font-<?=$i;?>" ><?=$key['namaStep']?></a>
                    <?php elseif ($key['icon'] == 'ico-pencil'): ?>
                    <a onclick="steplatihan('<?=$key['latid'];?>')" class="media-heading"  id="font-<?=$i;?>" ><?=$key['namaStep']?></a>
                    <?php else: ?>
                    <a href="<?=$key['link'];?>#test" class="media-heading"  id="font-<?=$i;?>" ><?=$key['namaStep']?></a>

                    <?php endif ?>
                  </p>
                  <!-- Untuk menampung staus step disable or enable -->
                  <input type="hidden" id="status-<?=$i;?>" value="<?=$key["status"];?>" >
                  </div>
                </div>
              <?php 
              $i ++;    
              endforeach ?>
              

              <!-- menampung nilai panjang array -->
                <input id="n" type="hidden"  value="<?=$i;?>" >
                <p id="tes" hidden="true"><?=$i;?></p>
                <!-- <input type="text" name="t" value="gg" hidden="true"> -->
              <!-- END Tieme line -->
            <?php endif?>
              </div>
            </div>
            </ul>   


    </div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
  // $(document).ready(function() { 
  //     var n = $("#n").val();
  //     for (i = 0; i < n; i++) {
  //     var status = $("#status-"+i).val();
  //         // cek status disable
  //     if (status=="disable") {
  //       // jika status disable
  //       $("#ico-"+i).css("background","#b0b0b0");
  //       $("#font-"+i).css("color","#b0b0b0");
  //     }else if(status =="current"){
  //       // jika step line yg sedang di buka
  //       $("#ico-"+i).css("background","#f2184f");
  //       $("#font-"+i).css("color","#f2184f");
  //       $("#bg-"+i).css({ "background-color":"","box-shadow": "inset 0 0 0 1px #E4E4E4,inset 0 1px 6px #E6E6E6"});
  //     }
         
  //     }
  // });

  function tess() {
      var status = $("#n").val();
      console.log(status);
  }
</script>



<script type="text/javascript">
    $(document).ready(function() { 
        var n = $("#n").val();
        console.log(n);
        $("#ico-0").css("background","red");
        for (i = 0; i < n; i++) {
        var status = $("#status-"+i).val();
        
            if (status=="disable") {
                 $("#ico-"+i).css("background","red");
                 $("#font-"+i).css("color","gray");
                 $("#bulet-"+i).css("border-color","gray");
            } 
            else if(status=="enable"){
                $("#ico-"+i).css("background","#202c45");
                 $("#font-"+i).css("color","#202c45");
                 $("#bulet-"+i).css("border-color","#202c45");

            }

           
        }
    });
</script>

<script type="text/javascript">
    function stepvideo(uuid) {
        // console.log(uuid);
        url_ajax = base_url+"linetopik/tampungUUID";


        var global_properties = {
          uuid: uuid
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/step_video";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    
</script>
<script type="text/javascript">
    function stepmateri(uuid) {
        // console.log(uuid);
        url_ajax = base_url+"linetopik/tampungUUID";


        var global_properties = {
          uuid: uuid
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/step_materi";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    
</script>

<script type="text/javascript">
    function steplatihan(latid) {
        // console.log(latid);
        window.location.href= base_url+"linetopik/create_session_id_latihan/"+latid;

       
    }
    
</script>




