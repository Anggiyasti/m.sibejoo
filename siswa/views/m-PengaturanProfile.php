<!-- get data siswa unutk di tampilkan di form -->
<?php 
    foreach ($siswa as $row) {
        $namaDepan = $row['namaDepan'];
        $namaBelakang = $row['namaBelakang'];
        $alamat = $row['alamat'];
        $noKontak = $row['noKontak'];
        $biografi = $row['biografi'];
        $namaSekolah = $row['namaSekolah'];
        $alamatSekolah  = $row['alamatSekolah']; 
        $photo=base_url().'assets/image/photo/siswa/'.$row['photo'];
        $oldphoto=$row['photo'];
    };
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/library/jquery/js/preview.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/library/jquery/js/upbar.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/library/jquery/js/jequery.form.js') ?>"></script>
<style type="text/css">
.alert-warning {
    color: #8a6d3b;
    background-color: #fcf8e3;
    border-color: #faebcc;
    margin: 10px;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
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
                    <?php if ($this->session->flashdata('updsiswa') != '') { ?>
                        <div class="alert alert-warning fade in">
                            <span class="semibold">Note :</span><?php echo $this->session->flashdata('updsiswa'); ?>
                        </div>
                    <?php } else { ?>
                        <div class="alert alert-warning fade in">
                            <span class="semibold">Note :</span>&nbsp;&nbsp;Pastikan data form di isi dengan benar.
                        </div>
                    <?php }; ?>
                            
                    <div class="content-block mb-15">
                        <div class="buttons-row">
                            <a href="#tab1-1" class="tab-link active button button-primary">Profile</a>
                            <a href="#tab2-1" class="tab-link button button-primary">Photo</a>
                            <a href="#tab3-1" class="tab-link button button-primary">Email</a>
                            <a href="#tab4-1" class="tab-link button button-primary">Password</a>
                        </div>
                    </div>

                    <!-- tab-pane: profile -->
                    <div class="tabs">
                        <div id="tab1-1" class="tab active">
                            <div class="content-block mt-15">
                            <!-- form profile -->
                                <form name="form-profile" action="<?=base_url()?>index.php/siswa/ubahprofilesiswa" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                    <p style="color: #fcf8e3">This information appears on your public profile, search results, and beyond.</p>
                                    <div class="list-block">
                                        <ul>
                                            <!-- Text inputs -->
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Nama Depan</div>
                                                        <div class="item-input">
                                                            <input type="text" name="namadepan" value="<?=$namaDepan;?>">
                                                            <span class="text-danger"> <?php echo form_error('namadepan'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Nama Belakang</div>
                                                        <div class="item-input">
                                                            <input type="text" name="namabelakang" value="<?=$namaBelakang;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Alamat</div>
                                                        <div class="item-input">
                                                            <input type="text" name="alamat" value="<?=$alamat;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">No Kontak</div>
                                                        <div class="item-input">
                                                            <input type="text" name="nokontak" value="<?=$noKontak;?>">
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
                                                            <textarea placeholder="Describe about yourself" name="biografi"><?=$biografi;?></textarea>
                                                            <p class="help-block">About yourself in 160 characters or less.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <!-- Select -->
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Nama Sekolah</div>
                                                        <div class="item-input">
                                                           <input type="text" name="namasekolah" value="<?=$namaSekolah;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Alamat Sekolah</div>
                                                        <div class="item-input">
                                                            <input type="text" name="alamatsekolah" value="<?=$alamatSekolah;?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-submit">
                                                    <input type="submit" value="Simpan Perubahan" class="button button-small js-form-submit button-fill button-primary">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- tab-pane: phto -->
                        <div id="tab2-1" class="tab">
                            <div class="content-block mt-15">
                                <!-- form photo -->
                                <form name="form-account" action="<?=base_url()?>index.php/siswa/upload/<?=$oldphoto; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
                                    <p style="color: #fcf8e3">Pilih photo baru untuk merubah photo profilmu !</p>
                                    <div class="list-block">
                                        <ul>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Photo</div>
                                                        <div class="item-input">
                                                            <img id="preview" class="img-circle img-bordered" src="<?=$photo;?>" alt="" width="34px" />
                                                            <input type="file" id="file" name="photo" class="btn btn-default" required="true"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-submit">
                                                    <a onclick="restImg()" class="button button-small js-form-submit button-fill button-danger">Reset</a>
                                                    <input type="submit" value="Simpan Perubahan" class="button button-small js-form-submit button-fill button-primary" style="margin-top: 5px;">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                                 <!--/ form Photo -->
                            </div>
                        </div>
                        <!--/ tab-pane: photo -->
                        <!-- tab-pane: email -->
                        <div id="tab3-1" class="tab">
                            <div class="content-block mt-15">
                                <!-- form email -->
                                <form name="form-account" action="<?=base_url()?>index.php/siswa/ubahemailsiswa" method="POST" >
                                    <p style="color: #fcf8e3">Masukan email barumu, untuk merubah email yang sekarang digunakan</p>
                                    <div class="list-block">
                                        <ul>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Email</div>
                                                        <div class="item-input">
                                                            <input type="email" name="email" value="" required="true" placeholder="masukkan email" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-submit">
                                                    <a onclick="restEmail()" class="button button-small js-form-submit button-fill button-danger">Reset</a>
                                                    <input type="submit" value="Simpan Perubahan" class="button button-small js-form-submit button-fill button-primary" style="margin-top: 5px;">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                                <!--/ form email -->
                            </div>
                        </div>
                        <!--/ tab-pane: email -->
                        <!-- tab-pane: katasandi -->
                        <div id="tab4-1" class="tab">
                            <div class="content-block mt-15">
                                <!-- form password -->
                                <form name="form-password" action="<?=base_url()?>index.php/siswa/ubahkatasandi" method="POST">
                                    <p style="color: #fcf8e3">Ingin merubah password?</p>
                                    <div class="list-block">
                                        <ul>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Kata Sandi Lama</div>
                                                        <div class="item-input">
                                                            <input type="password" class="form-control" name="sandilama" required="true" placeholder="Masukkan kata sandi lama" />
                                                            <p class="help-block"><a href="javascript:void(0);">Forgot password?</a></p>
                                                            <span class="text-danger"> <?php echo form_error('sandilama'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Kata Sandi Baru</div>
                                                        <div class="item-input">
                                                            <input type="password" class="form-control" name="newpass" required="true" placeholder="Masukkan kata sandi baru" />
                                                            <span class="text-danger"> <?php echo form_error('newpass'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item-content">
                                                    <div class="item-inner">
                                                        <div class="item-title label">Verifikasi Kata Sandi</div>
                                                        <div class="item-input">
                                                            <input type="password" class="form-control" name="verifypass" required="true" placeholder="Masukkan ulang kata sandi baru" />
                                                            <span class="text-danger"> <?php echo form_error('verifypass'); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-submit">
                                                    <a onclick="restPassword()" class="button button-small js-form-submit button-fill button-danger">Reset</a>
                                                    <input type="submit" value="Simpan Perubahan" class="button button-small js-form-submit button-fill button-primary" style="margin-top: 5px;">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form> 
                            </div>
                        </div>
                        <!--/ tab-pane: password -->
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function restImg() {
        $("input[name=photo]").val("");
        $('#preview').attr('src', "");
        $('#file').text("");
        $('#filetypeSoal').text("");
        $('#filesizeSoal').text("");
    }
    function restEmail() {
        $("input[name=email]").val("");    
    }
    function restPassword() {
        $("[name=sandilama]").val("");  
        $("[name=newpass]").val("");
        $("[name=verifypass]").val("");  
    }
</script>