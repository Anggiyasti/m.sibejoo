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
        <ul>
        <?php  
                $n=0;
                $oldMpalel='';
        ?>
        <?php foreach ($datMapel as $key): ?>
        <?php $mapel=$key['mapel'] ?>
        <?php if ($n==0): ?>
        <?php $n=1; ?>
                <center>
                    <h1><?=$mapel?></h1>
                <?php elseif($oldMpalel != $mapel) : ?>
                    <h1><?=$mapel?></h1>
                <?php endif ?>
                </center>

                <li>
                            <a onclick="learningline(<?=$key['babID']?>)"
                                class="item-link item-content item-content-icon item-content-icon-slider">
                                <div class="item-inner blog-list">
                                    <div class="text">
                                        <h4 class="title mt-5 mb-0"><?=$key['judulBab']?></h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                <!-- <blockquote style="margin-left: 10px;">
                   <a onclick="learningline(<?=$key['babID']?>)" ><?=$key['judulBab']?></a>
                   <br><br>
                </blockquote>  
 -->

        <?php $oldMpalel=$mapel; ?>
        <?php endforeach ?>
        </ul>

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

