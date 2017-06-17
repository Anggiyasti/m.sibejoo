<style type="text/css">
.blog-post {
    margin-bottom: 40px;
}
  
.blog-post .post-info {
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    background-color: #555555;
    text-align: center;
    color: #ffffff;
    overflow: hidden;
}

.post-info .date-post {
    width: 53px;
    height: 53px;
    background-color: #FD1C5B;
}
.post-info .date-post .day {
    font-size: 25px;
    font-weight: 500;
    height: 50%;
    line-height: 33px;
}
.post-info-main {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    vertical-align: middle;
    display: inline-block;
}
.post-info .comments-post {
    width: 53px;
    line-height: 53px;
    height: 53px;
    background-color: #FD1C5B;
}
.post-info + .quotes {
    margin-top: 20px;
}
.quote-avatar-author {
    float: left;
    margin: 5px 40px 0 0;
}
.bg-color-2 {
    background-color: #555555;
    color: #ffffff;
}
.bg-color-2 a{
    background-color: #555555;
    color: #ffffff;
}
a, button {
    cursor: pointer;
}
</style>
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
                        <div class="blog-post">
                            <article>
                                <div class="post-info">
                                    <div class="date-post"><div class="day">{tanggal}</div><div class="month">{bulan}</div></div>
                                    <div class="post-info-main">
                                        <input type="hidden" value="{id_pertanyaan}" name="idpertanyaan">
                                        <input type="hidden" value="{id_pengguna}" name="idpengguna">
                                        <input type="hidden" value="{statusRespon}" name="statusRespon">


                                        <div class="author-post"><i class="fa fa-user" aria-hidden="true"></i> by {author}</div>
                                    </div>
                                    <div class="comments-post"><i class="fa fa-comment"></i> {jumlah}</div>
                                </div>
                            </article>
                        </div>
                    
                        <div class="list-block media-list mt-0 mb-30 comments-list">
                            <div class="item-link item-content">
                                <div class="item-media">
                                    <img src="{photo}" data-at2x="{photo}" alt="{namaPengguna}"/>
                                </div>
                                <div class="item-inner">
                                    <div class="text">
                                        <h1>{judul_header}</h1>
                                    </div>
                                    <div class="row mt-5">
                                        <div class="col-80 product">
                                            <h1><?=$isi ?></h1>
                                            <input type="hidden" name="single" value="<?=htmlspecialchars($isi) ?>">
                                        </div>
                                        <div class="col-20 author text-right">
                                            {author} ({akses})
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-left">
                                | <span rel="tag"><i class="fa fa-tags"></i> {bab}</span> |
                                <a onclick="quote('single')" rel="tag"><i class="fa fa-quote-right"></i> Quote</a> |
                                <a onclick="quote(0)" rel="tag"><i class="fa fa-comment-o"></i> Balas</a> |
                                <?php if ($username==$this->session->userdata('USERNAME')): ?>
                                    <a onclick="edit()"><i class="fa fa-pencil"></i> Edit</a> |
                                <?php endif ?>   
                            </div>
                        </div>

                        <?php $number = 1; ?>
                        <?php if ($data_postingan!=array()): ?>
                            <?php foreach ($data_postingan as $item_postingan): ?>
                                <?php $link = base_url('konsultasi/show_post/').$item_postingan['jawabID'] ?>
                                <?php $number++; ?>
                                <div class="row bg-color-2">
                                    <div class="container"><?=$item_postingan['date_created'] ?> |
                                    <a title="view single post" onclick="tamp_idjawab(<?=$item_postingan['jawabID']?>)">#<?=$number ?></a></div>
                                </div><br>
                                <div class="list-block media-list mt-0 mb-30 comments-list">
                                    <div class="item-link item-content">
                                        <div class="item-media">
                                            <?php if ($item_postingan['hakAkses']=="siswa") {
                                                $gbr = base_url().'assets/image/photo'."/".$item_postingan['hakAkses']."/".$item_postingan['siswa_photo'];
                                            }else{
                                                $gbr = base_url().'assets/image/photo'."/".$item_postingan['hakAkses']."/".$item_postingan['guru_photo'];
                                            }?>
                                            <img src="<?=$gbr ?>" data-at2x="<?=$gbr ?>" alt="<?=$gbr ?>"/>
                                        </div>
                                        <div class="item-inner">
                                            <div class="row mt-5">
                                                <div class="col-80 product">
                                                    <?php $value =htmlspecialchars($item_postingan['isiJawaban']). 
                                                    "<span style='font-style:italic'><br>Post By:".ucfirst($item_postingan['namaPengguna']).
                                                    "<a title='view single post' href='".$link."'><i class='fa fa-arrow-circle-o-right'> > </i></a>"?>
                                                    <?=$item_postingan['isiJawaban'] ?>
                                                    <input type="hidden" name="<?=$item_postingan['jawabID'] ?>" value="<?=$value ?>">
                                                </div>
                                                <div class="col-20 author text-right">
                                                    <?=$item_postingan['namaPengguna'] ?> (<?=$item_postingan['hakAkses'] ?>)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($this->session->userdata('HAKAKSES')=="guru"): ?>
                                        <div class="text-right">
                                            <a onclick="quote(<?=$item_postingan['jawabID'] ?>)" >
                                                <i class="fa fa-quote-right ">
                                                </i> Quote  
                                            </a>
                                        </div>
                                    <?php else :?>
                                        <?php if ($item_postingan['namaPengguna']==$this->session->userdata('USERNAME')): ?>
                                            <div class="text-right">
                                                <a onclick="quote(<?=$item_postingan['jawabID'] ?>)">
                                                    <i class="fa fa-quote-right ">
                                                    </i> Quote  
                                                </a> |

                                                <a onclick="editpost(<?=$item_postingan['jawabID']?>)">
                                                    <i class="fa fa-pencil smaller">
                                                    </i> Edit   
                                                </a>
                                            </div>
                                        <?php else :?>
                                            <div class="text-right">
                                                <a onclick="point(<?=$item_postingan['jawabID'] ?>)">
                                                    <i class="fa fa-heart">
                                                    </i> Point
                                                </a> |

                                                <a onclick="quote(<?=$item_postingan['jawabID'] ?>)">
                                                    <i class="fa fa-quote-right ">
                                                    </i> Quote  
                                                </a>
                                            </div>
                                        <?php endif ?>
                                    <?php endif ?>
                                </div>

                            <?php endforeach ?>
                        <?php endif ?>

                        <!-- editor reply -->
                        <div id="jawaban">
                            <span>Isi Jawaban :</span>
                            <textarea  name="respon" id="isi" row=10 cols=80></textarea>
                            <form action="<?=base_url('konsultasi/do_upload') ?>" method="post" enctype="multipart/form-data" id="form-gambar">
                                <span>Upload gambar :</span> 
                                <input type="file" class="cws-button bt-color-3 alt smaller post" name="file" style="display: inline">
                                <a onclick="submit_upload()" style="border: 2px solid #18bb7c; padding: 2px;display: inline" title="Upload" id="submit-button"><i class="fa fa-cloud-download"></i></a> 
                                <div id="output" style="display: inline">
                                    <a style="border: 2px solid grey; padding: 2px;display: inline" title="Sisipkan" disabled><i class="fa fa-cloud-upload"></i></a> 
                                </div>
                                <input type="submit" class="fa fa-cloud-upload submit-upload" style="margin-top: 3px;display: none" value="Upload">
                             <!--    <a style="border: 2px solid grey; padding: 2px;display: inline" title="Sisipkan" onclick="insert()"><i class="fa fa-cloud-upload"></i></a>  -->
                            </form><br>
                            <a onclick="simpan_jawaban()" class="button button-small js-form-submit button-fill button-primary post">Post</a>
                        </div>

                  </div> 
                </div>
            </div>
        </div>

    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Script ajax upload -->
<script src="<?= base_url('assets/library/jquery/js/jequery.form.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/ajaxfileupload.js') ?>"></script>
 <!-- / Script ajax upload -->

<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/config.js') ?>"></script>
<script src="http://macyjs.com/assets/js/macy.min.js"></script>
<script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/adapters/jquery.js') ?>"></script>
<script type="text/javascript">
    var j = jQuery.noConflict();

            function append_new(datas){
                if (datas.hakAkses=='guru') {
                    photo = base_url+"assets/image/photo/"+datas.hakAkses+"/"+datas.guru_photo;
                }else{
                    photo = base_url+"assets/image/photo/"+datas.hakAkses+"/"+datas.siswa_photo;
                }
                konten = '<div class="blog-post">'+
                '<article>'+
                '<div class="row bg-color-2">'+
                '<div class="container">'+datas.date_created+'|'+
                '<a title="view single post" href=""> New Post</a></div>'+
                '</div></div><br>'+
                '<div class="quotes clear-fix" >'+
                '<div class="quote-avatar-author clear-fix">'+
                '<img src="'+photo+'" width="60px">'+
                '<div class="author-info">'+datas.namaPengguna+'<br><span>'+datas.hakAkses+'</span></div></div>'+
                '<div>'+
                '<span style="font-style:italic">'+
                // '<a title="view single post" href=""><i class="fa fa-arrow-circle-o-right">  </i></a>'+
                '<div class="komen">'+datas.isiJawaban+'<input type="hidden" name="'+datas.jawabID+'" value="">'+
                '</div>'+
                '</div>'+
                '</div><br>'+
                '</article>'+
                '</div>';
                $('.add-pertanyaan').prepend(konten);
            }

            function insert(){
                nama_file = $('.insert').data('nama');
                url = base_url+"assets/image/konsultasi/"+nama_file;

                CKEDITOR.instances.isi.insertHtml('<img src='+url+' ' + CKEDITOR.instances.isi.getSelection().getNative()+'>');
            }

            function submit_upload(){
                $('.submit-upload').click();
            }

            jQuery(document).ready(function() { 
                jQuery('#form-gambar').on('submit', function(e) {
                    e.preventDefault();
                    jQuery('#submit-button').attr('disabled', ''); 
                    jQuery("#output").html('<div style="padding:10px"><img src="<?php echo base_url('assets/image/loading/spinner11.gif'); ?>" alt="Please Wait"/> <span>Mengunggah...</span></div>');
                    j(this).ajaxSubmit({
                        target: '#output',
                        success:  sukses 
                    });
                });
            }); 

            function sukses(){
            console.log('masuk'); 
                j('#form-upload').resetForm();
                jQuery('#submit-button').attr('disabled', ''); 
            }

            var ckeditor;



            j(document).ready(function(){
                CKEDITOR.replace( 'respon', {
                    height: 260,
                    /* Default CKEditor styles are included as well to avoid copying default styles. */
                } );

                /*ckeditor = CKEDITOR.replace('respon');    */
            });

            var ckeditor;
            var string;
            var txt = 1;
            function quote(data){
                if (data==0) {                      
                    // balas
                    $('html, body').animate({
                        scrollTop: $("#jawaban").offset().top
                    }, 2000);
                }else{
                    //quote
                    $('html, body').animate({
                        scrollTop: $("#jawaban").offset().top
                    }, 2000);

                    string = $('input[name='+data+']').val();

                    CKEDITOR.instances.isi.setData("<blockquote>"+string+"</blockquote><br>");
                }

            }
            function simpan_jawaban(){
                hak_akses = ("<?=$this->session->userdata('HAKAKSES') ?>");

                var socket = io.connect( 'http://'+window.location.hostname+':3000' );

                // get text from ck editor
                txt = CKEDITOR.instances.isi.getData();
                
                var datas = {
                    isiJawaban : txt,
                    penggunaID : $('input[name=idpengguna]').val(),
                    pertanyaanID : $('input[name=idpertanyaan]').val(),
                    statusRespon : $('input[name=statusRespon]').val()
                };

                url = base_url+"konsultasi/ajax_add_jawaban/";
                $.ajax({
                    url : url,
                    type: "POST",
                    data: datas,
                    dataType: "TEXT",
                    success: function(data){
                        if (hak_akses=='guru') {
                            if (datas.statusRespon!=1) {
                                socket.emit('remove_notifikasi', {
                                    datas
                                }); 
                            }
                        // add ke konten yang di insert
                    }
                    $.getJSON( base_url+"konsultasi/get_last_jawaban/", function( datas ) {
                        swal('Posting berhasil...');
                        append_new(datas);
                    });
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error adding / update data');
                    
                }
            });

            }

            function point(data){
                elemen = "<textarea class='form-control' name='komentar'></textarea>";
                $('.modal-body').html(elemen);
                $('.modal-header .modal-title').html("Berikan Komentar");
                $('#myModal').modal('show');
                button = "<button type='button' class='cws-button bt-color-1 alt small' data-dismiss='modal'>Batal</button><button type='button' class='cws-button bt-color-2 alt small mulai-btn post'onclick='komen("+data+")'>Berikan</button>";

                $('.modal-footer').html(button);


            }

            function komen(data){
                var isikomentar = $('textarea[name=komentar]').val();
                url = base_url+"konsultasi/check_point/"+data;

                datas = {
                    isiKomentar : isikomentar,
                    idJawaban : data
                }
                var stat;
                $.ajax({
                    url : url,
                    type: "POST",
                    data: datas,
                    dataType: "json",
                    success: function(data, status, jqXHR)
                    {
                        stat = get_data(data, datas);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        swal('Error adding / update data');
                    }
                });

            }

            function get_data(data, datas){
                status = data;
                postingan = datas;
                if (status==1) {
                    swal("Tidak Dapat Memberikan Point")
                }else{
                    console.log(postingan.idJawaban);
                    url = base_url+"konsultasi/ajax_add_point/"+postingan.idJawaban;
                    $.ajax({
                        url : url,
                        type: "POST",
                        data: datas,
                        dataType: "text",
                        success: function()
                        {
                            swal("sudah ditambahkan");
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            swal('Error adding / update data');
                        }
                    });
                }
            }

    // redirect show post
  function tamp_idjawab(idjawab) {
    url_ajax = base_url+"konsultasi/tamp_idjawab";

    var global_properties = {
      idjawab: idjawab
    };

    $.ajax({
      type: "POST",
      dataType: "JSON",
      url: url_ajax,
      data: global_properties,
      success: function(data){
        window.location.href = base_url + "konsultasi/show_post";  
      },error:function(data){
        sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
      }

    });
  }

  function editpost(idjawab) {
      window.location.href = base_url + "konsultasi/editpost/"+idjawab;
  }

</script>