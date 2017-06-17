<?php $member = $this->session->userdata('member') ?>
<div class="products">
    <?php if(!empty($posts)): foreach($posts as $post): ?>
<?php $status_akses = ($post['statusAksesFile']==1 && $member==0) ? 'disabled' : 'enabled' ; ?>
      <?php $url_download =  'href="'.base_url("assets/modul/".$post['url_file']).'"' ?>
      <?php $url = ($post['statusAksesFile']==1 && $member==0) ? 'disabled' : $url_download; ?>
      <?php $onclick =  ($post['statusAksesFile']==1 && $member==0) ? 'onclick="go_token()"' : 'onclick="Approved('.$post['id'].')"';  ?>
       <div class="content-block mt-0 mb-0">
                                <blockquote>
                                    <?= $post['judul']?><br>
                                    <?= $post['deskripsi']?><br>
                                    
                                </blockquote>
                                <!-- <a onclick="lihat_detail(<?=$tryout_item['id_tryout'];?>)" class="button button-small js-form-submit button-fill button-primary">Lihat Paket Soal</a> -->
                                
                                <a title="Download" <?=$status_akses?> <?=$url ?> class="button button-small js-form-submit button-fill button-primary" target="_blank" style="padding:8" <?=$onclick ?>> <i class="fa fa-download <?=$status_akses ?>"></i></a> 
                            </div>
                            <?php endforeach; else: ?>
                            <p>Post(s) not available.</p>
                            <?php endif; ?>
                    
                            </div>
                            <br>

                            <div class="clear"></div>
                            <?php echo $this->ajax_pagination->create_links(); ?>

<script type="text/javascript">
    
function go_token(){
  swal('Oops','Maaf anda harus menjadi member untuk mengunduh file ini','warning');
}
</script>