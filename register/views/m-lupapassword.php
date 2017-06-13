<div class="pages navbar-fixed toolbar-fixed">
    <div data-page="login" class="page page-bg">

        <div class="page-content">
            <div class="text-center">
              <img src="http://sibejoo.com/img/logo-sibejoo.png" alt="" class="logo"/>
            </div>
            <div class="text-center">
              <h2 style="color: black;"><b>LUPA PASSWORD</b></h2>
            </div>

            <div class="login-view-box">

                <div class="list login-form-box">
                  <div class="list-block" style="margin-right: 30px;margin-left: 30px;">
                    <ul>
                      <li>
                        <div class="item-content">
                          <div class="item-inner">
                            <?php if ($this->session->flashdata('notif') != '') {?>
                              <div class="alert alert-warning">
                                <span class="semibold">Note :</span><?php echo $this->session->flashdata('notif'); ?>
                              </div>
                            <?php } else { ?>
                              <div class="alert alert-warning">
                                <span class="semibold">Note :</span>&nbsp;&nbsp;Kami akan kirimkan kode reset password ke email akun mu.
                              </div>
                            <?php }?>
                          </div>
                        </div>
                      </li> 
                    </ul>
                  </div>
                  <form action="<?= base_url() ?>index.php/register/ch_mail_aktivasi" method="post">
                    <label class="item item-input" for="mce-EMAIL">
                      <input type="email" placeholder="xxx@mail.com" name="email" value="<?php echo set_value('email'); ?>" required />
                    </label>
                  </form>
                  <button type="submit" class="button button-block button-positive">Submit</button>
                </div>

                <div class="footer-link text-center">
                    <a href="<?= base_url('index.php/login'); ?>">
                        Login?
                    </a> 
                </div>

            </div>

        </div>

    </div>
</div>  

  <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form1').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form1'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>