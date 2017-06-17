<!-- Views -->

<style type="text/css">
 .row{position: relative;}
 .post-list{ 
  margin-bottom:20px;
}
div.list-item {
  border-bottom: 4px solid #7ad03a;
  margin: 25px 15px 2px;
  padding: 20px 12px;
  /*background-color:#F1F1F1;*/
  -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
  min-height: 150px;
  /*width: 29%;*/
  float: left;
}
div.list-item p {
  margin: .5em 0;
  padding: 2px;
  font-size: 13px;
  line-height: 1.5;
}
.list-item a {
  text-decoration: none;
  padding-bottom: 2px;
  color: #0074a2;
  -webkit-transition-property: border,background,color;
  transition-property: border,background,color;-webkit-transition-duration: .05s;
  transition-duration: .05s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out;
}
.list-item a:hover{text-decoration:underline;}
.list-item h3{font-size:25px; font-weight:bold;text-align: left;}

/* search & filter */
.post-search-panel input[type="text"]{
  width: 220px;
  height: 28px;
  color: #333;
  font-size: 16px;
}
.post-search-panel select{
  height: 34px;
  color: #333;
  font-size: 16px;
}

/* Pagination */
div.pagination {
  font-family: "Lucida Sans Unicode", "Lucida Grande", LucidaGrande, "Lucida Sans", Geneva, Verdana, sans-serif;
  padding:2px;
  margin: 20px 10px;
  float: right;
}

div.pagination a {
  margin: 2px;
  padding: 0.5em 0.64em 0.43em 0.64em;
  background-color: black;
  text-decoration: none; /* no underline */
  color: #fff;
}
div.pagination a:hover, div.pagination a:active {
  padding: 0.5em 0.64em 0.43em 0.64em;
  margin: 2px;
  background-color: grey;
  color: #fff;
}
div.pagination span.current {
  padding: 0.5em 0.64em 0.43em 0.64em;
  margin: 2px;
  background-color: #f6efcc;
  color: #6d643c;
}
div.pagination span.disabled {
  display:none;
}
.pagination ul li{display: inline-block;}
.pagination ul li a.active{opacity: .5;}

/* loading */
.loading{position: absolute;left: 0; top: 0; right: 0; bottom: 0;z-index: 2;background: rgba(255,255,255,0.7);}
.loading .content {
  position: absolute;
  transform: translateY(-50%);
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  top: 50%;
  left: 0;
  right: 0;
  text-align: center;
  color: #555;
}

.clear{
  clear: both;
}

</style>
<div class="views">
    <div class="view view-main">

        <div class="navbar">
    <div class="navbar-inner">
        <div class="left">
            <a href="<?=base_url('welcome') ?>" class="link">
                <span class="icon-chevron-left"></span> <span>Back</span>
            </a>
        </div>
        <div class="center sliding">Modul Online</div>
        <div class="right">
            <a href="#" class="link icon-only open-panel" data-panel="right">
                
            </a>
        </div>
    </div>
</div>

        <div class="pages navbar-fixed toolbar-fixed">
            <!-- <div class="page page-bg"> -->
                <div class="page-content">


                    
                    <div class="row mb-30" style="background-color: #fff">
                    

                        <div class="col-100" >
                        <div id="page-meta" class="group">
                        <div class="content-block mt-0 mb-0">
                    <div class="forms">
                            <div class="form-row">
                                <div class="input-text woocommerce-result-count">
                                <form>
                                    <input type="text" id="keywords" placeholder="Masukan judul file yang dicari" onkeyup="searchFilter()" style="background:white;">
                                    
                                </form>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="list-block">
                <div class="item-content">
                                
                                <div class="item-inner">
                                   
                                    <div class="item-input">
                                        <form class="woocommerce-ordering" method="get">
                            <select id="sortBy" onchange="searchFilter()" class="orderby">
                                <option value="">Urutkan</option>
                                <option value="asc">Judul A-Z</option>
                                <option value="desc">Judul Z-A</option>
                                <option value="date_created">Terbaru</option>
                            </select>
                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div id="postList">
                        <div class="products">
                            <?php if(!empty($posts)): foreach($posts as $post): ?>
                            <?php $status_akses = ($post['statusAksesFile']==1 && $member==0) ? 'disabled1' : 'enabled' ; ?>
                            <?php $url_download =  'href="'.base_url("assets/modul_online/".$post['url_file']).'"' ?>
                            <?php $url = ($post['statusAksesFile']==1 && $member==0) ? 'disabled1' : $url_download; ?>
                            <?php $onclick =  ($post['statusAksesFile']==1 && $member==0) ? 'onclick="go_token()"' : 'onclick="Approved('.$post['id'].')"';  ?>
                            <div class="content-block mt-0 mb-0">
                                <blockquote>
                                    <?= $post['judul']?><br>
                                    <?= $post['deskripsi']?><br>
                                </blockquote>
                                <!-- <a onclick="lihat_detail(<?=$tryout_item['id_tryout'];?>)" class="button button-small js-form-submit button-fill button-primary">Lihat Paket Soal</a> -->
                                <a title="Download" <?=$status_akses?> <?=$url ?> class="button button-small js-form-submit button-fill button-primary <?=$status_akses?>" target="_blank" style="padding:8" <?=$onclick ?> > <i class="fa fa-download <?=$status_akses ?>"></i></a>
                            </div>

                            <?php endforeach; else: ?>
                            <p>Post(s) not available.</p>
                            <?php endif; ?>
                            </div>
                            <br>

                            <div class="clear"></div>
                            <?php echo $this->ajax_pagination->create_links(); ?>
                            </div>

                        </div>
                    </div>
                    

    
                </div>
            <!-- </div> -->
        </div>

    </div>
</div>

<script>
 function Approved(butId){
  // console.log(1);
  $.ajax({
   method: "POST",
   url: base_url+"index.php/modulonline/tambahdownload/"+butId,
   data: { rowid: butId },
   dataType:"text",
   success:function(data){
   },
   error:function (data){
   }
 });
}

function go_token(){
  sweetAlert('Oops','Maaf anda harus menjadi member untuk mengunduh file ini','warning');
}
</script>

<script>
 function searchFilter(page_num) {
  page_num = page_num?page_num:0;
  var keywords = $('#keywords').val();
  var sortBy = $('#sortBy').val();
  $.ajax({
   type: 'POST',
   url: base_url+ "index.php/modulonline/ajaxPaginationData/"+page_num,
   data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
   beforeSend: function () {
    $('.loading').show();
  },
  success: function (html) {
    $('#postList').html(html);
    $('.loading').fadeOut("slow");
  }
});
}



</script>                                  
