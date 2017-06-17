
<div class="products">
    <?php if(!empty($posts)): foreach($posts as $post): ?>
       <div class="content-block mt-0 mb-0">
                                <blockquote>
                                    <?= $post['judul']?><br>
                                    <?= $post['deskripsi']?><br>
                                    
                                </blockquote>
                                <!-- <a onclick="lihat_detail(<?=$tryout_item['id_tryout'];?>)" class="button button-small js-form-submit button-fill button-primary">Lihat Paket Soal</a> -->
                                
                                <a title="Download" href="<?= base_url("assets/modul/".$post['url_file'])?>" class="button button-small js-form-submit button-fill button-primary" target="_blank" style="padding:8"> <i class="fa fa-download"></i></a>
                            </div>
                            <?php endforeach; else: ?>
                            <p>Post(s) not available.</p>
                            <?php endif; ?>
                    
                            </div>
                            <br>

                            <div class="clear"></div>
                            <?php echo $this->ajax_pagination->create_links(); ?>
