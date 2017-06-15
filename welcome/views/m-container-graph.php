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
                <div class="center sliding">Home</div>
                <div class="right">
                    <a href="#" class="link icon-only open-panel" data-panel="right">
                        <span class="kkicon icon-user"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="pages navbar-fixed toolbar-fixed">
            <div data-page="index" class="page page-bg">

                <div class="toolbar">
                    <div class="toolbar-inner">
                        <a href="#" data-picker=".picker-social" class="open-picker link">
                            <span class="icon-share2"></span>
                        </a>
                        <a href="#" class="link">
                            <span class="icon-color-sampler"></span>
                        </a>
                        <a href="#" class="link open-popup" data-popup=".popup-splash">
                            <span class="icon-bookmark2"></span>
                        </a>
                        <a href="#" class="link open-popup" data-popup=".popup-login">
                            <span class="icon-lock"></span>
                        </a>
                    </div>
                </div>

                <div class="page-content">
                    <nav class="dashboard-menu">
                        <div class="row text-center">
                            <div class="col-33">
                                <a href="" class="menu-link" onclick="pesan()">
                                    <span class="icon-envelope-open"></span>
                                    <span>Pesan</span>
                                </a>
                            </div>
                            <div class="col-33">
                                <a onclick="learningline()" class="menu-link">
                                    <span class="icon-magic-wand"></span>
                                    <span>Learning Line</span>
                                </a>
                            </div>
                            <div class="col-33">
                                <a onclick="latihan()" class="menu-link">
                                    <span class="icon-pen2"></span>
                                    <span>Latihan</span>
                                </a>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-33">
                                <a onclick="tryout()" class="menu-link">
                                    <span class="icon-picture"></span>
                                    <span>Tryout</span>
                                </a>
                            </div>
                            <div class="col-33">
                                <a onclick="video()" class="menu-link">
                                    <span class="icon-camera"></span>
                                    <span>Video</span>
                                </a>
                            </div>
                            <div class="col-33">
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="popup popup-splash">
    <div class="content-block">
        <a href="#" class="close-popup">
            skip
        </a>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center">

                    <h2>Responsive</h2>

                    <h3>flexible layout</h3>
                    <img src="assets/img/tmp/slide1.png" alt=""/>

                </div>
                <div class="swiper-slide text-center">

                    <h2>Very Detailed</h2>

                    <h3>20+ page templates</h3>
                    <img src="assets/img/tmp/slide2.png" alt=""/>

                </div>
                <div class="swiper-slide text-center">

                    <h2>Call<br>Us Now</h2>

                    <h3>Lorem ipsum dolor sit amet enim. Etiam ullamcorper. Suspendisse a pellentesque dui, non felis.
                        Maecenas malesuada elit lectus felis, malesuada ultricies.</h3>
                    <a href="#" class="button mt-50">Click to call!</a>

                </div>
            </div>
            <div class="bottom-color"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</div>


<div class="popup popup-login">
    <div class="content-block">
        <a href="#" class="close-popup">
            skip
        </a>

        <div class="text-center mt-70">
            <h2>Hello!</h2>

            <h3>You wont to login?!</h3>
        </div>

        <div class="forms mt-50">
            <form method="post"
                  class="js-validate"
                  novalidate="novalidate">

                <div class="form-row">
                    <div class="input-text">
                        <input type="text" name="login" placeholder="Login" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-text">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="input-submit">
                        <a href="#" class="button button-big js-form-submit button-fill button-primary">Login</a>
                    </div>
                </div>
            </form>
        </div>

        <a href="#" class="more-info">I don't have a APP account.</a>
    </div>
</div>


<!-- Picker -->
<div class="picker-modal picker-social">
    <div class="toolbar">
        <div class="toolbar-inner">
            <div class="left"></div>
            <div class="right"><a href="#" class="close-picker">Done</a></div>
        </div>
    </div>
    <div class="picker-modal-inner">
        <div class="content-block mt-15 mb-10">
            <h3>Sharing is sexy!</h3>

            <p>Duis ac nibh ac quam quam sagittis tortor. Cum sociis natoque penatibus et neque.</p>

            <div class="social-buttons">
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-pinterest-square"></i></a>
                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                <a href="#"><i class="fa fa-google-plus-square"></i></a>
                <a href="#"><i class="fa fa-flickr"></i></a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // redirect ke halaman lain gabisa langsung pake a href
    // jadi bikin fungsi yang dibawah ini
    function pesan() {
        window.location.href = base_url + "ortuback/pesan";
    }
    function latihan() {
        window.location.href = base_url + "tesonline/daftarlatihan";
    }
    function tryout() {
        window.location.href = base_url + "tryout";
    }
    function video() {
        window.location.href = base_url + "video";
    }
     function learningline() {
        window.location.href = base_url + "linetopik/pilih_tingkat";
    }
    
</script>
