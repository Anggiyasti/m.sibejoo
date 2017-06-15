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
        <?php  
                $n=0;
                $oldMpalel='';
        ?>
        <?php foreach ($datMapel as $key): ?>
        <?php $mapel=$key['mapel'] ?>
        <?php if ($n==0): ?>
        <?php $n=1; ?>

                    <h1><?=$mapel?></h1>
                <?php elseif($oldMpalel != $mapel) : ?>
                    <h1><?=$mapel?></h1>
                <?php endif ?>


                <blockquote>
                   <a onclick="learningline(<?=$key['babID']?>)"><?=$key['judulBab']?></a>
                </blockquote>  

        <?php $oldMpalel=$mapel; ?>
        <?php endforeach ?>
        </div>

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

