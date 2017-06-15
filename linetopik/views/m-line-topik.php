<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/custom-time-line.css') ?>"/>

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

        <ul class="media-list media-list-feed  grid-col-3" >
                            <?php 
                            $i=0;
                            foreach ($topik as $key ):           
                            ?>
                                <li  class="media" id="bg-<?=$i;?>">
                                     <div class="media-object pull-left ">
                                       <i href=""  class="ico-circle22"></i> 
                                    </div>
                                    <div class="media-body" >
                                        <!-- Untuk menampung staus step disable or enable -->
                                        <!-- <input type="text" id="status-<?=$i;?>" value="<?=$key["status"];?>" hidden="true"> -->
                                        <!-- // Untuk menampung staus step disable or enable  -->
                                        
                                      <a onclick="line(<?=$key['id']?>)" class="media-heading"  id="font-<?=$i;?>" style="margin-left: 40px;"><?=$key['namaTopik']?></a>
                                    </div>
                                 <!-- <hr> -->
                                </li>
                            <?php 
                            $i ++;
                            endforeach ?>
                            </ul>



    </div>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
    function line(id_topik) {
        url_ajax = base_url+"linetopik/tampungid_topik";

        var global_properties = {
          id_topik: id_topik
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/learn";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    
</script>