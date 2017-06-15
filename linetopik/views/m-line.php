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
                    <a href="<?=$key['link'];?>#test" class="media-heading"  id="font-<?=$i;?>" ><?=$key['namaStep']?></a>
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




