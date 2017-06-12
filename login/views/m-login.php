<div class="navbar navbar-clear">
    <div class="navbar-inner">
        <div class="center sliding"></div>
    </div>
</div>

<div class="pages navbar-fixed toolbar-fixed">
    <div data-page="login" class="page page-bg">

        <div class="page-content">

            <div class="login-view-box">

                <div class="text-center">
                    <img src="http://sibejoo.com/img/logo-sibejoo.png" alt="" class="logo"/>
                </div>

                <div class="list login-form-box">
                    <div class="text-center">
                        <?php if ($this->session->flashdata('notif') != '') {

                    ?>

                    <div class="alert alert-warning">

                        <span class="semibold">Note :</span><?php echo $this->session->flashdata('notif'); ?>

                    </div>

                    <?php } ?>
                    </div> <br>
                    <form action="<?= base_url('index.php/login/validasiLogin'); ?>" method="post">
                         <label class="item item-input">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M9.5 11c-3.033 0-5.5-2.467-5.5-5.5s2.467-5.5 5.5-5.5 5.5 2.467 5.5 5.5-2.467 5.5-5.5 5.5zM9.5 1c-2.481 0-4.5 2.019-4.5 4.5s2.019 4.5 4.5 4.5c2.481 0 4.5-2.019 4.5-4.5s-2.019-4.5-4.5-4.5z"
                                      fill="#000000"></path>
                                <path d="M17.5 20h-16c-0.827 0-1.5-0.673-1.5-1.5 0-0.068 0.014-1.685 1.225-3.3 0.705-0.94 1.67-1.687 2.869-2.219 1.464-0.651 3.283-0.981 5.406-0.981s3.942 0.33 5.406 0.981c1.199 0.533 2.164 1.279 2.869 2.219 1.211 1.615 1.225 3.232 1.225 3.3 0 0.827-0.673 1.5-1.5 1.5zM9.5 13c-3.487 0-6.060 0.953-7.441 2.756-1.035 1.351-1.058 2.732-1.059 2.746 0 0.274 0.224 0.498 0.5 0.498h16c0.276 0 0.5-0.224 0.5-0.5-0-0.012-0.023-1.393-1.059-2.744-1.382-1.803-3.955-2.756-7.441-2.756z"
                                      fill="#000000"></path>
                            </svg>
                            <input type="text" name="username" placeholder="Username/Email"/>
                        </label>
                        <label class="item item-input">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M14.5 8h-0.5v-1.5c0-2.481-2.019-4.5-4.5-4.5s-4.5 2.019-4.5 4.5v1.5h-0.5c-0.827 0-1.5 0.673-1.5 1.5v8c0 0.827 0.673 1.5 1.5 1.5h10c0.827 0 1.5-0.673 1.5-1.5v-8c0-0.827-0.673-1.5-1.5-1.5zM6 6.5c0-1.93 1.57-3.5 3.5-3.5s3.5 1.57 3.5 3.5v1.5h-7v-1.5zM15 17.5c0 0.276-0.224 0.5-0.5 0.5h-10c-0.276 0-0.5-0.224-0.5-0.5v-8c0-0.276 0.224-0.5 0.5-0.5h10c0.276 0 0.5 0.224 0.5 0.5v8z"
                                      fill="#000000"></path>
                            </svg>
                            <input type="password" placeholder="Password" name="password" />
                        </label>
                        <button type="submit" class="button button-block button-positive">Login</button>
                    </form>
                </div>

                <div class="footer-link text-center">
                    <a href="<?= base_url('index.php/register'); ?>">
                        Belum Punya Akun?
                    </a> |
                    <a href="<?= base_url('index.php/register/lupapassword'); ?>">
                        Lupa Password?
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>