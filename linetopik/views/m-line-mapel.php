<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
        <div class="content-block mt-5">
        <ul style="text-align: center;" >
        <?php  $n=0;$oldMpalel='';?>
            <?php foreach ($datMapel as $key): ?>
              <?php $member = $this->session->userdata('member') ?>
              <?php $status_akses = ($key['statusAksesLearningLine']==0 && $member==0) ? 'disabled1' : 'enabled' ; ?>
              <?php $mapel=$key['mapel'] ?>

              <?php if ($n==0): ?>
                <?php $n=1; ?>
                <h5 class="widget-title line-bottom"><?=$mapel?></h5>
              <?php elseif($oldMpalel != $mapel) : ?>
                <h5 class="widget-title line-bottom"><?=$mapel?></h5>
              <?php endif ?>
              <div class="categories">
                <!-- <ul class="list list-border angle-double-right"> -->
                  <li><a id="bab_id" style="margin-right: : 10px;" onclick="getlearning(<?=$key['babID']?>)" class="<?=$status_akses ?> item-content item-content-icon item-content-icon-slider" ><?=$key['judulBab']?></a></li>
                <!-- </ul> -->
              </div>
              <?php $oldMpalel=$mapel; ?>
            <?php endforeach ?>
        </ul>

        </div>
        <?php if ($datMapel==array()): ?>
          <br>
                <h4 class="text-center" style="color:#f27c66;">Maaf,Pada Tingkat ini belum tersedia learning line!</h4>
              <?php endif ?>

    </div>
</div>
 </div>
            </div>

        </div>
        </div>


<script type="text/javascript">
    function learningline(id_bab) {
        url_ajax = base_url+"linetopik/tampungid_bab";

        var global_properties = {
          id_bab: id_bab
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/learningline";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    
</script>
<script type="text/javascript">
      function getlearning(judulBab) {
        status_learning_member = $('.categories li a').hasClass("disabled1");
        
        if(status_learning_member) {
          sweetAlert("Sayang sekali", "Anda harus menjadi member terlebih dahulu untuk mengakses bab tersebut", "warning")
          window.open(base_url+"donasi", '_blank')
        } else {
          url_ajax = base_url+"linetopik/tampungid_bab";

          var global_properties = {
            judulBab: judulBab
          };

          $.ajax({
            type: "POST",
            dataType: "JSON",
            url: url_ajax,
            data: global_properties,
            success: function(data){
              window.location.href = base_url + "linetopik/learningline";  
            },error:function(data){
              sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
            }

          });
        }
      }
    </script>

