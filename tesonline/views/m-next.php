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
                    <h3 class="text-center" style="color: white">Mulai Latihan untuk pelajaran <?=$mp;?></h3>
                    <form class="form-group" id="formlatihan" method="post" onsubmit="return false;">
                    <div class="alert alert-dismissable alert-danger" id="info" hidden="true" >
                        <button type="button" class="close" onclick="hideme()" >×</button>
                        <strong>Terjadi Kesalahan</strong> <br>Silahkan Lengkapi Data.
                    </div>
                    <ul>
                        <!-- Select Bab -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">Bab</div>
                                    <div class="item-input">
                                        <select name="bab" id="babSelect">
                                            <option value=0>-Bab Pelajaran-</option>
                                            <!-- cek dulu usernya member atau bukan -->
                                            <?php if ($this->session->userdata('member')==1): ?>
                                              <?php foreach ($bab as $babitem) : ?> 
                                                <option value="<?=$babitem['id']?>"><?=$babitem['judulBab']?></option>
                                              <?php endforeach ?>
                                            <?php else : ?>
                                              <?php foreach ($bab as $babitem) : 
                                                if ($babitem['statusAksesLatihan'] == 1) : ?>
                                                  <option value="<?=$babitem['id']?>" onclick="go_token()" disabled><?=$babitem['judulBab']?> (Member)</option>
                                                <?php else : ?>
                                                  <option value="<?=$babitem['id']?>"><?=$babitem['judulBab']?></option>
                                                <?php endif ?>
                                              <?php endforeach ?>
                                            <?php endif ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Select Subab -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">Subab</div>
                                    <div class="item-input">
                                        <select name="subab" id="subSelect">
                                            <option value=0>-Pilih Sub-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Select Kesulitan -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">Tingkat Kesulitan</div>
                                    <div class="item-input">
                                        <select name="kesulitan" id="kesulitan">
                                            <option value=0>-Pilih Tingkat Kesulitan-</option>
                                            <option value="mudah">Mudah</option>
                                            <option value="sedang">Sedang</option>
                                            <option value="sulit">Sulit</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Select Kesulitan -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">
                                    <div class="item-title label">Jumlah Soal</div>
                                    <div class="item-input">
                                        <select class="form-control" name="jumlahsoal">
                                          <option value=0>-Pilih Jumlah Soal-</option>
                                          <option value="5">5</option>
                                          <option value="10">10</option>
                                          <option value="15">15</option>
                                        </select> 
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="input-submit">
                                <a class="button button-small js-form-submit button-fill button-primary" style="margin-top: 5px;">Batal</a>
                                <a class="button button-small js-form-submit button-fill button-primary mulai-btn" onclick="mulai('mulai')" style="margin-top: 5px;">Mulai Latihan</a>
                                <a class="button button-small js-form-submit button-fill button-primary latihan-nnti-btn" onclick="mulai('nanti')" style="margin-top: 5px;">Latihan nanti</a>
                            </div>
                        </li>
                    </ul>
                    </form>
                    </div>
    
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function submit(id) {
        window.location.href = base_url + "index.php/tesonline/next/" + id;    
    }

    $('#babSelect').change(function () {
        load_sub($('#babSelect').val());
    });

    function load_sub(babID) {
      $.ajax({
        type: "POST",
        data: babID.bab_id,
        url: "<?php echo base_url() ?>index.php/videoback/getSubbab/" + babID,
        success: function (data) {
          $('#subSelect').html('<option value=0>-- Pilih Sub Bab Pelajaran  --</option>');
          $.each(data, function (i, data) {
            $('#subSelect').append("<option value='" + data.id + "'>" + data.judulSubBab + "</option>");
          });
        }
      });
    }
    
    function mulai(test) {
      var sub_bab_id = $('#subSelect').val();
      var kesulitan = $("select[name=kesulitan]").val();
      var jumlahsoal = $("select[name=jumlahsoal]").val();
      var subabid = $("select[name=subab]").val();
      var babid = $("select[name=bab]").val();



      var data = {
        kesulitan: kesulitan,
        jumlahsoal: jumlahsoal,
        subab: subabid,
        bab:babid
      };
      if (data.kesulitan == 0 || data.jumlahsoal == 0) {
        $('#info').show();
      }else{
            $('.mulai-btn').text('Proses...'); //change button text
            $('.mulai-btn').attr('disabled', true); //set button disable 

            if (data.subab==0) {
              url = "<?php echo base_url() ?>index.php/latihan/tambah_latihan_ajax_bab";
              console.log(data);
            }else{
              url = "<?php echo base_url() ?>index.php/latihan/tambah_latihan_ajax";
            }

            $.ajax({
              url: url,
              type: "POST",
              dataType: 'text',
              data: data,
              success: function (data, respone)
              {
                    $('.mulai-btn').text('save'); //change button text
                    $('.mulai-btn').attr('disabled', false); //set button enable 
                    $('#formlatihan')[0].reset(); // reset form on modals
                    if (test == 'mulai') {
                      window.location.href = base_url + "index.php/tesonline/mulaitest";
                    } else {
                      window.location.href = base_url + "index.php/tesonline/daftarlatihan";
                    }
                  },
                  error: function (respone, jqXHR, textStatus, errorThrown)
                  {
                    swal('Error adding / update data');
                  }
                });
          }
        }

        function go_token(){
          swal('Maaf, anda harus menjadi member');
        }

        $(function(){
          var options_sel_idx = 0;

          $("#babSelect").on("change", this, function(event) {
            console.log('hello');
            if($(this.options[this.selectedIndex]).hasClass("disabled")) {
              go_token();
              window.open(base_url+"donasi", '_blank')
              this.selectedIndex = options_sel_idx;
            } else {
              options_sel_idx = this.selectedIndex;
            }
          });
        });
</script>