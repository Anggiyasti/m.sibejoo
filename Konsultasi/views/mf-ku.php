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
                                            <option selected value="<?=base_url('konsultasi/pertanyaan_ku') ?>"  class="center-text">Pertanyaan Saya</option>
                                            <option value="<?=base_url('konsultasi/pertanyaan_all')?>">Semua Pertanyaan</option>
                                            <option value="<?=base_url('konsultasi/pertanyaan_grade')?>">Pertanyaan Setingkat</option>
                                            <option value="<?=base_url('konsultasi/pertanyaan_mento')?>r">Pertanyaan Sementor</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                          <input type="text" placeholder="Cari pertanyaan lalu enter" class="form-control search-input" name="cari" id="search1" onkeyup="my_search()">
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
                    <?php if(!empty($my_questions)): foreach($my_questions as $question): ?>
                      <div class="list-block media-list mt-0 mb-0 comments-list">
                        <div class="item-link item-content">
                          <div class="item-media">
                            <img src="<?=base_url("assets/image/photo/siswa/".$question['photo'])?>" alt=""/>
                          </div>
                          <div class="item-inner">
                            <div class="row mt-5">
                              <div class="col-50 product">
                                <h3>
                                  <a onclick="single_konsul(<?=$question['pertanyaanID'] ?>)">
                                    <p><i class="fa fa-quote-left"></i> <?=$question['judulPertanyaan'] ?> (<?=$question['date_created'] ?>) <i class="fa fa-quote-right" aria-hidden="true"></i></p> <br>
                                    <?=$question['isiPertanyaan'] ?>
                                  </a>
                                </h3>
                              </div>
                              <div class="col-50 author text-right">
                                <?=$question['namaDepan']." ".$question['namaBelakang'] ?>
                              </div>
                            </div>
                            <div class="text-right">
                              <h6>
                                <a href="<?=base_url('konsultasi/filter/'.str_replace(' ', '_', $question['namaMataPelajaran']).'/all') ?>"><i class="fa fa-tags text-theme-color-2"></i> <?=$question['namaMataPelajaran'] ?></a> | 
                                <a href="<?=base_url('konsultasi/filter/'.str_replace(' ', '_', $question['namaMataPelajaran']).'/'.str_replace(' ', '_', $question['judulBab'])) ?>  "><i class="fa fa-puzzle-piece text-theme-color-2"></i> <?=$question['judulBab'] ?></a> |
                                <span><i class="fa fa-pencil text-theme-color-2"></i> <?=$question['jumlah'] ?></span> |
                                  <?php if (!empty($question['namaGuru'])): ?>
                                    <a ><span><i class="fa fa-search"></i> <?=$question['namaGuru'] ?></span></a>
                                  <?php else: ?>
                                    <span>Tanpa Mentor</span>
                                  <?php endif ?>
                              </h6>
                            </div>
                          </div>
                        </div>
                      </div>

                      <?php endforeach; else: ?>
                    <p>Post(s) not available.</p>
                  <?php endif; ?>
                  <div class="clear"></div>
                  
                    <!-- pagination -->
                    <hr>
                    <div>
                      <div class="page-pagination clear-fix" style="width:100%;">
                        <center><?php echo $this->ajax_pagination->create_links(); ?></center>  
                      </div>
                    </div>
                    <!-- / pagination -->
                  </div>
                  <!-- end semua -->
                  
                  </div> 
                </div>
            </div>
        </div>

    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- on keypres cari soal -->
<script type="text/javascript">
function my_search(page_num) {
    page_num = page_num?page_num:0;
    keyword = $('#search1').val().replace(/ /g,"-");    
          
    var properties_search = {
      keyword: keyword,
      page: page_num
    };

    $.ajax({
          type: 'POST',
          url: base_url + 'konsultasi/ajaxPaginationKu/'+page_num,
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

    if (mapel == 'Pilih_Mata_Pelajaran') {
      sweetAlert("Oops...", "Silahkan Pilih Pelajaran Atau Bab Terlebih Dahulu", "error");
    }else{
      if (bab=='Bab_Pelajaran') {
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
              document.location = base_url+"konsultasi/filter_pertanyaanku"; 
            },error:function(data){
              sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
            }

          });
      }else if(bab!='Bab_Pelajaran'){
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
              document.location = base_url+"konsultasi/filter_pertanyaanku"; 
            },error:function(data){
              sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
            }

          });
      }
    }

  });

// redirect ke single konsultasi
  function single_konsul(pertanyaanID) {
    console.log(pertanyaanID);
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
    window.location.href = base_url + "konsultasi/pertanyaan_ku";
  }

</script>