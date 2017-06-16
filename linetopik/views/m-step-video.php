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
            <div class=" delay-1" id="test">
            <div class="card  delay-2">
              <!-- START ROW -->
              <div class="row">
              <h3>Judul Video : <?=$datVideo['judulVideo']?></h3>
                <?php if ($datVideo['link']=='' || $datVideo['link']==' '): ?>
                  <div class="container-video color-palette bg-color-6alt">
                    <video class="" width="100%" height="100%"  controls>
                      <source src="<?=base_url();?>assets/video/<?=$datVideo['namaFile'];?>" >
                        Your browser does not support the video tag.
                    </video>
                  </div>
                <?php endif ?>
                <?php if ($datVideo['namaFile']=='' || $datVideo['namaFile']==' '): ?>
                <div class="video-player" style="background:grey;">
                  <iframe src="<?=$datVideo['link']?>" width="100%" height="300" frameborder="0" allowfullscreen></iframe> 
                </div>
                <?php endif ?>
                <h3>Deskripsi</h3>
                <p><?=$datVideo['deskripsiVideo']?></p>
              </div>
              <!-- END ROW -->
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




