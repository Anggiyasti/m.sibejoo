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
                        <input type="hidden" name="babid" value="{bab}">
                        <div class="col-sm-12">     
                            <div class="alert alert-dismissable alert-danger" id="info" hidden="true" >
                                <button type="button" class="close" onclick="hideme()" >×</button>
                                <strong>Terjadi Kesalahan</strong> <br>Isi nama pertanyaan dan pertanyaan di editor yang sudah disediakan.
                            </div>
                        </div>

                        <!-- Start Editor Soal -->
                        <label >Kepada Mentor ? :
                            <?php if (empty($mentornya)): ?> <span class="text-danger">Anda belum memiliki mentor</span><?php endif ?>
                        </label><br>
                        <ul>
                            <li>
                                <select class="form-control" name="mentor" style="height: 35px;">
                                    <option value="NULL">- Tidak -</option>
                                    <?php if (!empty($mentornya)): ?>
                                    <option value="<?=$mentornya['guruID'] ?>"><?=$mentornya['namaDepan']." ".$mentornya['namaBelakang'] ?></option>
                                    <?php endif ?>
                                </select>
                            </li>
                            <li>
                                <label>Judul Pertanyaan :</label>
                                <input name="namaPertanyaan" type="text" value="" size="50" aria-required="true" class="form-control search-input col-sm-10" style="height: 35px;" placeholder="Masukkan judul pertanyaan"> 
                                <input type="hidden" name="idsub" value="{idsub}">
                            </li>
                            <li>
                                <label>Isi Pertanyaan :</label>
                                <textarea  name="editor1" id="isi"></textarea>
                                <form action="<?=base_url('konsultasi/do_upload') ?>" method="post" enctype="multipart/form-data" id="form-gambar">
                                    Upload Gambar : 
                                    <input type="file" class="cws-button bt-color-3 alt smalls post" name="file" style="display: inline">

                                    <a onclick="submit_upload()" style="border: 2px solid #18bb7c; padding: 2px;display: inline" title="Upload" id="submit-button"><i class="fa fa-cloud-download"></i></a> 
                                    <div id="output" style="display: inline">
                                        <a style="border: 2px solid grey; padding: 2px;display: inline" title="Sisipkan" disabled><i class="fa fa-cloud-upload"></i></a> 
                                    </div>
                                    <input type="submit" class="fa fa-cloud-upload submit-upload" style="margin-top: 3px;display: none" value="Upload">            
                                    </a>
                                </form>
                                <br>
                            </li>
                            <li>
                                <a onclick="save()" class="button button-small js-form-submit button-fill button-primary post">Post</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= base_url('assets/library/jquery/js/jequery.form.js') ?>"></script>
<!-- Script ajax upload -->
 <script type="text/javascript" src="<?= base_url('assets/js/ajaxfileupload.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/ckeditor.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/ckeditor/adapters/jquery.js') ?>"></script>
<!-- UPLOAD -->
<script type="text/javascript"> 
    var j = jQuery.noConflict();
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
<script src="http://macyjs.com/assets/js/macy.min.js"></script>
<script src="<?php echo base_url('node_modules/socket.io/node_modules/socket.io-client/socket.io.js');?>"></script>
<!-- UPLOAD -->
<script>
    var ckeditor = CKEDITOR.replace( 'editor1' );

    function preview(){
        var desc = ckeditor.getData();jqXHR
        var data = {
            namapertanyaan : $('input[name=namaPertanyaan]').val(),
            isi : desc,
        }
        console.log(data);

        $('.modal-body .judul').html("<h5>Judul</h5>");     
        $('.modal-body .judul').append(data.namapertanyaan);
        $('.modal-body .isi').html("<h5>Isi Pertanyaan</h5> ");
        $('.modal-body .isi').append(data.isi);


        if (data.namapertanyaan == "" || data.namapertanyaan == "") {
            swal("Tolong, isi judul dan pertanyaan anda..")

        }else{
            $('#preview').modal('show');
        }
    }

    function save(){
        var desc = ckeditor.getData();
        var datas = {
            namapertanyaan : $('input[name=namaPertanyaan]').val(),
            isi : desc+"<br>",
            bab : $('input[name=babid]').val(),
            mentorID:$('select[name=mentor]').val()
        }

        if (datas.namapertanyaan == "" || datas.namapertanyaan == "") {
            $('#info').show();
        }else{
            url = base_url+"konsultasi/ajax_add_konsultasi/";
            $.ajax({
                url : url,
                type: "POST",
                data: datas,
                dataType: "TEXT",
                success: function(data)
                {
                $('.post').text('Posting..'); //change button text
                $('.post').attr('disabled',false); //set button enable
                // Try to connect io
                var socket = io.connect( 'http://'+window.location.hostname+':3000' );

                // throw value to server
                socket.emit('create_pertanyaan', {
                    data
                }
                );
                // throw value to server
                swal('Posting berhasil...');
                window.location = base_url+"konsultasi/pertanyaan_all";
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                swal('Error adding / update data');
            }
        });

            
        }
    }

    function hideme(){
        $('#info').hide();
    }
    var table_gambar;
    function show_image(){
        $('#show_gambar').modal('show');
        table_gambar = $('.table_img').DataTable({
            "ajax": {
                "url": base_url+"konsultasi/list_image_uploaded",
                "type": "POST"
            },
            "emptyTable": "Tidak Ada Data Pesan",
            "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ entries",
            "bDestroy": true,
        });
    }

    function upload_gambar_konsultasi(){

    }
</script>