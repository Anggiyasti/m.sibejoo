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
                        <div class="content-block">
                            <h3 style="color: white;"><strong>{judul_video}</strong></h3>
                            <iframe width="100%" src="{file}" frameborder="0" allowfullscreen></iframe>
                            <div class="text">
                                <h4 class="title mt-5 mb-0">
                                    <a href="post1.html">{judul_video} (<?=count($comments) ?>) Comments</a>
                                </h4>
                                <small>Author: {nama_penulis} at 23.02.2015</small>
                            </div>
                            <div class="text">
                                <h4 class="title mt-5 mb-0">
                                    <a href="post1.html">Comments</a><hr>
                                </h4>
                                <?php foreach ($comments as $comment): ?>
                                    <small><?=$comment->namaPengguna ?> says:</small>
                                    <p><?=$comment->isiKomen ?></p> <hr>
                                <?php endforeach ?>
                                <h3 style="color: white">Leave a Comment</h3>
                            </div>
                            <div class="text">
                                <form class="login-form" action ="" id="formkomen" method = "post" style="color: red" >
                                    <div id="info">
                                      <div class="sukses text-info text-center hide" hidden="true">
                                        <span>Komen anda telah terkirim, tunggu moderisasi dari guru yang bersangkutan</span>
                                      </div>
                                      <div class="gagal text-danger text-center hide" hidden="true">
                                        <span>Gagal memberikan komen !</span>
                                      </div> 
                                      <div class="lengkapi text-danger text-center hide" hidden="true">
                                        <span>Tolong isi komentar</span>
                                      </div>
                                    </div>

                                  </form>
                            </div>
                            <div class="text">
                                <form role="form" id="comment-form">
                                    <div class="list-block">
                                        <ul>
                                             <!-- Text inputs -->
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Author</div>
                                                        <div class="item-input">
                                                            <input type="text" required="" name="contact_name" id="contact_name" placeholder="<?=$this->session->userdata('USERNAME') ?>" disabled>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Textarea -->
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Bio</div>
                                                        <div class="item-input">
                                                            <textarea id="isiKomen" name="isiKomen" placeholder="Enter Message" rows="7"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-submit">
                                                    <input type="submit" value="Kirim" class="button button-small js-form-submit button-fill button-primary">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </form>
                            </div>
                        </div>
                   
                </div>
            </div>
        </div>

    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- sound notification -->
<audio id="notif_audio"><source src="<?php echo base_url('sounds/notify.ogg');?>" type="audio/ogg"><source src="<?php echo base_url('sounds/notify.mp3');?>" type="audio/mpeg"><source src="<?php echo base_url('sounds/notify.wav');?>" type="audio/wav"></audio>
<!-- /sound notification -->
<script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
<script type="text/javascript">
        $(document).ready(function () {

          $("#comment-form").submit(function (e) {
            e.preventDefault();
            var isiKomen = $("#isiKomen").val();
            var videoID = <?= $this->uri->segment(3) ?>;
            if (isiKomen=="") {
              $('#info .lengkapi').show();
             
              $('#info .gagal').show();
            }else{
             $.ajax({
              type: "POST",
              url: '<?php echo base_url() ?>index.php/video/addkomen',
              data: {isiKomen: isiKomen, videoID: videoID},
              dataType: "json",
              cache : false,
              success: function (data)
              {
              $('#info .sukses').show();

                if(data.success == true){

                  var socket = io.connect( 'http://'+window.location.hostname+':3000' );

                  socket.emit('new_count_komen', { 
                    new_count_komen: data.new_count_komen
                  });

                  socket.emit('new_komen', { 
                   isiKomen: data.isiKomen,
                   videoID: data.videoID,
                   userID: data.userID,
                   UUID: data.UUID,
                   namaPengguna:data.namaPengguna,
                   date_created:data.date_created,
                   videoID:data.videoID,
                   photo:data.photo,
                   mapelID:data.mapelID
                 });

                } else if(data.success == false){
                  console.log("gagal");
                }
                    // IO
                  },
                  error: function ()
                  {
                    $('#info .lengkapi').removeClass('hide');
                    $('#info .sukses').addClass('hide');
                    $('#info .gagal').removeClass('hide');
                  }
                }); 
           }

         });
        });
</script>