<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
            <div class="container activity p-l-r-20">
            <div class="row m-l-0" >
              <div class="col" >
              <!-- Start Time Line -->
              <?php 
                $i=0;
                foreach ($topik as $key ):           
                ?>
                <div class="contact" >
                 
                  <div class="dot z-depth-1" style="margin-left: 7px;" id="bulet-<?=$i;?>">
                  </div>
                  <div class="step">
                  <p>

                  <a onclick="line(<?=$key['id']?>)" id="font-<?=$i;?>" style="margin-right: 100px;"><?=$key['namaTopik']?></a>

                  </p>
                  <!-- Untuk menampung staus step disable or enable -->
                 
                  </div>
                </div>
              <?php 
              $i ++;    
              endforeach ?>
              

              <!-- menampung nilai panjang array -->
                <!-- <input type="text" name="t" value="gg" hidden="true"> -->
              <!-- END Tieme line -->

              </div>
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