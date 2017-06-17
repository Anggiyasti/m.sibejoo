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
                        <!-- Start Editor Soal -->
                        <div id="editor-soal">
                            Isi Pertanyaan :
                            <textarea  name="editor1" id="isi"></textarea>
                            <form action="<?=base_url('konsultasi/do_upload') ?>" method="post" enctype="multipart/form-data" id="form-gambar">
                                Upload Gambar : 
                                <input type="file" class="cws-button bt-color-3 alt smaller post" name="file" style="display: inline">
                                <a onclick="submit_upload()" style="border: 2px solid #18bb7c; padding: 2px;display: inline" title="Upload" id="submit-button"><i class="fa fa-cloud-download"></i></a> 
                                <div id="output" style="display: inline">
                                    <a style="border: 2px solid grey; padding: 2px;display: inline" title="Sisipkan" disabled><i class="fa fa-cloud-upload"></i></a> 
                                </div>
                                <input type="submit" class="fa fa-cloud-upload submit-upload" style="margin-top: 3px;display: none" value="Upload">
                            </form> <br>
                            <a onclick="save()" class="button button-small js-form-submit button-fill button-primary post">Post</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<input type="text" value="<?=(htmlspecialchars($edit['isiJawaban'])) ?>" name="isi_jawaban" hidden="true">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Script ajax upload -->
<script src="<?= base_url('assets/library/jquery/js/jequery.form.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/ajaxfileupload.js') ?>"></script>
 <!-- / Script ajax upload -->

<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/adapters/jquery.js') ?>"></script>
<script type="text/javascript"> 
    var j = jQuery.noConflict();
    var ckeditor;
    j(document).ready(function(){
        ckeditor = CKEDITOR.replace( 'editor1' );
        isiJawaban = $('input[name=isi_jawaban]').val();

        CKEDITOR.instances.isi.setData(isiJawaban);
    });

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

    function sukses()  { 
        j('#form-upload').resetForm();
        jQuery('#submit-button').attr('disabled', ''); 

    } 

    function insert(){
        nama_file = $('.insert').data('nama');
        url = base_url+"assets/image/konsultasi/"+nama_file;

        CKEDITOR.instances.isi.insertHtml('<img src='+url+' ' + CKEDITOR.instances.isi.getSelection().getNative()+'>');

    }

    
    // masukin text ke posisi tertentu
    jQuery.fn.extend({
        insertAtCaret: function(myValue){
            return this.each(function(i) {
                if (document.selection) {
                    this.focus();
                    sel = document.selection.createRange();
                    sel.text = myValue;
                    this.focus();
                }
                else if (this.selectionStart || this.selectionStart == '0') {
                    var startPos = this.selectionStart;
                    var endPos = this.selectionEnd;
                    var scrollTop = this.scrollTop;
                    this.value = this.value.substring(0, startPos)+myValue+this.value.substring(endPos,this.value.length);
                    this.focus();
                    this.selectionStart = startPos + myValue.length;
                    this.selectionEnd = startPos + myValue.length;
                    this.scrollTop = scrollTop;
                } else {
                    this.value += myValue;
                    this.focus();
                }
            })
        }
    });
    // masukin text ke posisi tertentu

    
</script>
<!-- UPLOAD -->
<script>
    function save(){
        var desc = ckeditor.getData();
        var data = {
            isi : desc+"<br>",
            id:"<?=$edit['id'] ?>",
            pertanyaanID: <?=$edit['pertanyaanID'] ?>
        }

        if (data.isi == "") {
            $('#info').show();
        }else{
            url = base_url+"konsultasi/ajax_update_jawaban/";
            $.ajax({
                url : url,
                type: "POST",
                data: data,
                dataType: "JSON",
                success: function(data)
                {
                $('.post').text('Posting..'); //change 
                $('.post').attr('disabled',false); //set 
                window.location = base_url+"konsultasi/singlekonsultasi";
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                swal('Error adding / update data');
            }
        });
        }
    }

</script>