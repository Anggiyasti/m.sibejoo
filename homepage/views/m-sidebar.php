<!-- Left panel -->
<div class="panel panel-left panel-reveal">
    <div class="line"></div>

    <div class="logo-box">
        <h2>Sibejoo</h2>
    </div>

    <div class="list-block mt-15">
        <div class="list-group">
            <nav>
                <ul>
                    <li class="divider">
                        Menu
                    </li>
                    <li>
                        <a onclick="home()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Home</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="video()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-video-camera"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Video</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="tryout()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-file-text-o"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Tryout</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="konsultasi()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-newspaper-o"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Konsultasi</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="latihan()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-magic"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Latihan</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="edu_drive()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="icon-folder"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Edu Drive</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-area-chart"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Learning Line</div>
                                <div class="item-after">
                                </div>
                            </div>
                        </a>
                        <a href="#" class="js-toggle-menu"><span class="icon-chevron-down"></span></a>

                        <ul>
                            <li>
                                <a onclick="lineMapel(1)" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-th"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">SD</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a onclick="lineMapel(2)" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">SMP</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a onclick="lineMapel(3)" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">SMA</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a onclick="lineMapel(4)" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">SMA IPA</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a onclick="lineMapel(5)" class="item-link close-panel item-content">
                                    <div class="item-media">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">SMA IPS</div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>
    </div>

</div>

<!-- Right panel -->
<div class="panel panel-right panel-reveal">
    <div class="line"></div>

    <div class="user-banner">
        <span class="ava-box">
            <img src="<?=base_url()?>assets/image/avatar/default.png" alt="">
        </span>
    </div>

    <div class="welcome-msg">
        <h3>Hallo, <strong><?=$this->session->userdata('NAMASISWA') ?></strong>!</h3>
    </div>

    <div class="list-block mt-15">
        <div class="list-group">
            <nav>
                <ul>
                    <li>
                        <a onclick="profile()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Profile</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="pesan()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Pesan</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="donasi()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Donasi</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="token()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Token</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a onclick="logout()" class="item-link close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-sign-out"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">Logout</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="list-group mt-20">
            <nav>
                <ul>
                    <li>
                        <a onclick="website()" class="item-link item-primary close-panel item-content">
                            <div class="item-media">
                                <i class="fa fa-info-circle"></i>
                            </div>
                            <div class="item-inner">
                                <div class="item-title">About APP/Website</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

</div>
<script type="text/javascript">
    function home() {
        window.location.href = base_url + "welcome";
    }
    function video() {
        window.location.href = base_url + "video";
    }
    function tryout() {
        window.location.href = base_url + "tryout";
    }
    function konsultasi() {
        window.location.href = base_url + "konsultasi/pertanyaan_all";
    }
    function latihan() {
        window.location.href = base_url + "tesonline/daftarlatihan";
    }
    function edu_drive() {
        window.location.href = base_url + "modulonline/allmodul";
    }
    function lineMapel(id_tingkat) {
        url_ajax = base_url+"linetopik/ambiltingkat";

        var global_properties = {
          id_tingkat: id_tingkat
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/lineMapel";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    function profile() {
        window.location.href = base_url + "siswa/profilesetting";
    }
    function pesan() {
        window.location.href = base_url + "ortuback/pesan";
    }
    function donasi() {
        window.location.href = base_url + "donasi";
    }
    function logout() {
        window.location.href = base_url + "logout";
    }
    function website() {
        window.location.href = "http://google.com";
    }
    function edu_drive() {
        window.location.href = base_url + "token/infotoken";
    }
</script>

<script type="text/javascript">
    function lineMapel(id_tingkat) {
        url_ajax = base_url+"linetopik/ambiltingkat";

        var global_properties = {
          id_tingkat: id_tingkat
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/lineMapel";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    
</script>