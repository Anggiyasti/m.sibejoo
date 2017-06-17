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
                  <div class="list-block mt-0 blog-box" style="background-color: white;">
                <?php if ($this->session->userdata('HAKAKSES')=='siswa'): ?>
                  <!-- MENU UNTUK SISWA -->
                  <form>
                    <h4>Filter Pertanyaan</h4>
                    <ul>
                      <!-- Select Mapel -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-input">
                                        <select name="mapel" id="mapelSelect">
                                            <option value=0>-Pilih Matapelajaran-</option>
                                            <?php foreach ($mapel as $mapel_item): ?>
                                              <option value=<?=$mapel_item['tingpelID'] ?>><?=$mapel_item['napel'] ?></option>  
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Select Bab -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-input">
                                        <select name="tingkat" id="babSelect">
                                            <option value=0>-Pilih Bab-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                          <div class="input-submit">
                            <a class="button button-small js-form-submit button-fill button-primary buat-btn" style="margin-top: 5px;"><i class="fa fa-plus"></i> Buat</a>
                            <a class="button button-small js-form-submit button-fill button-primary cari-btn" style="margin-top: 5px;"><i class="fa fa-search"></i> Cari</a>
                            </div>
                        </li>
                    </ul>

                  <div class="list-block mt-0 blog-box" style="background-color: white;">
                    <h4>Pencarian Pertanyaan</h4>
                    <ul>
                        <!-- Select Mapel -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-input">
                                        <select name="" id="" onchange="location = this.value";>
                                            <option value="<?=base_url('konsultasi/pertanyaan_ku') ?>"  class="center-text">Pertanyaan Saya</option>
                                            <option value="<?=base_url('konsultasi/pertanyaan_all')?>">Semua Pertanyaan</option>
                                            <option selected value="<?=base_url('konsultasi/pertanyaan_grade')?>">Pertanyaan Setingkat</option>
                                            <option value="<?=base_url('konsultasi/pertanyaan_mento')?>r">Pertanyaan Sementor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                          <input type="text" placeholder="Cari pertanyaan lalu enter" class="form-control search-input" name="cari" id="search1" onkeyup="search_grade()">
                        </li>
                        <li>
                          <div class="input-submit">
                            <a onclick="reset()" class="button button-small js-form-submit button-fill button-primary" style="margin-top: 5px;"><i class="fa fa-times"></i> Reset</a>
                        </li>
                    </ul>
                  </div>
                  </form>
                  <!-- END MENU UNTUK SISWA -->
                  <?php else: ?>
                  <!-- MENU UNTUK GURU -->
                  <!-- END MENU UNTUK GURU -->
                  <?php endif; ?>

                  <!-- semua -->
                  <div id="konsulList">
                    <!-- pagination -->
                    <hr>
                    <div>
                      <div class="page-pagination clear-fix" style="width:100%;">
                        <center><?php echo $this->ajax_pagination->create_links(); ?></center>  
                      </div>
                    </div>
                    <!-- / pagination -->
                  </div>
                  <!-- / konsulList -->

                  </div> 
                </div>
            </div>
        </div>

    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- on keypres cari soal -->
<script type="text/javascript">
  window.onload = function() {
      page_num=0;
      keyword = $('#search1').val().replace(/ /g,"-"); 
      var properties_load = {
          page:page_num,
          keyword: keyword
       };

      $.ajax({
          type: 'POST',
          url: base_url + 'konsultasi/ajaxPaginationGrade/'+page_num,
          data: properties_load,
          beforeSend: function () {
            $('.loading').show();
          },
          success: function (html) {
            $('#konsulList').html(html);
          }
      });
  }
  function search_grade(page_num) {
    page_num = page_num?page_num:0;
    keyword = $('#search1').val().replace(/ /g,"-");    
          
    var properties_search = {
      keyword: keyword,
      page: page_num
    };

    $.ajax({
          type: 'POST',
          url: base_url + 'konsultasi/ajaxPaginationGrade/'+page_num,
          data: properties_search,
          beforeSend: function () {
              $('.loading').show();
          },
          success: function (html) {
              $('#konsulList').html(html);
          }
      });
  }

  $('.cari-btn').click(function(){
    url_ajax = base_url+"konsultasi/tamp_cari";
    var mapel= $('#mapelSelect').find(":selected").text().replace(/ /g,"_");
    var bab= $('#babSelect').find(":selected").text().replace(/ /g,"_");

    console.log(mapel);
    if (mapel == 'Pilih_Mata_Pelajaran') {
      sweetAlert("Oops...", "Silahkan Pilih Pelajaran Atau Bab Terlebih Dahulu", "error");
    }else{
      if (mapel!='Pilih Mata Pelajaran' && bab=='Bab Pelajaran') {
        var global_properties = {
            mapel: mapel,
            bab: 'all'
          };

        $.ajax({
            type: "POST",
            dataType: "JSON",
            url: url_ajax,
            data: global_properties,
            success: function(data){
              document.location = base_url+"konsultasi/filter_grade"; 
            },error:function(data){
              sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
            }

          });
      }else if(bab!='Bab Pelajaran'){
        var global_properties2 = {
            mapel: mapel,
            bab: bab
          };

          $.ajax({
            type: "POST",
            dataType: "JSON",
            url: url_ajax,
            data: global_properties2,
            success: function(data){
              document.location = base_url+"konsultasi/filter_grade"; 
            },error:function(data){
              sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
            }

          });
      }
    }
  });

  // redirect ke single konsultasi
  function single_konsul(pertanyaanID) {
    url_ajax = base_url+"konsultasi/tamp_single";

    var global_properties = {
      pertanyaanID: pertanyaanID
    };

    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: url_ajax,
      data: global_properties,
      success: function(data){
        window.location.href = base_url + "konsultasi/singlekonsultasi";  
      },error:function(data){
        sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
      }

    });
  }

  function reset() {
    window.location.href = base_url + "konsultasi/pertanyaan_grade";
  }

</script>