<!-- semua -->
                  <?php if ($my_questions): ?>
                    <?php foreach ($my_questions as $question): ?>
                      <div class="list-block media-list mt-0 mb-0 comments-list">
                        <div class="item-link item-content">
                            <div class="item-media">
                                <img src="<?=base_url("assets/image/photo/siswa/".$question['photo'])?>" alt=""/>
                            </div>
                            <div class="item-inner">
                                <div class="row mt-5">
                                    <div class="col-50 product">
                                      <h3><a onclick="single_konsul(<?=$question['pertanyaanID'] ?>)">
                                        <p><i class="fa fa-quote-left"></i> <?=$question['judulPertanyaan'] ?> (<?=$question['date_created'] ?>) <i class="fa fa-quote-right" aria-hidden="true"></i></p> <br>
                                        <?=$question['isiPertanyaan'] ?>
                                      </a></h3>
                                    </div>
                                    <div class="col-50 author text-right">
                                      <?=$question['namaDepan']." ".$question['namaBelakang'] ?>
                                    </div>
                                </div>
                                <div class="text-right">
                                  <h6
                                    <a href="<?=base_url('konsultasi/filter/'.str_replace(' ', '_', $question['namaMataPelajaran']).'/all') ?>"><i class="fa fa-tags text-theme-color-2"></i> <?=$question['namaMataPelajaran'] ?></a> | 
                                    <a href="<?=base_url('konsultasi/filter/'.str_replace(' ', '_', $question['namaMataPelajaran']).'/'.str_replace(' ', '_', $question['judulBab'])) ?>  ">
                                    <i class="fa fa-puzzle-piece text-theme-color-2"></i> <?=$question['judulBab'] ?></a> |
                                    <span><i class="fa fa-pencil text-theme-color-2"></i> <?=$question['jumlah'] ?></span> |
                                    <?php if (!empty($question['namaGuru'])): ?>
                                      <a ><span><i class="fa fa-search"></i> <?=$question['namaGuru'] ?></span></a>
                                    <?php else: ?>
                                      <span>Tanpa Mentor</span>
                                    <?php endif ?>
                                  </h6>
                                </div>
                            </div>
                        </div>
                      </div>
                    <?php endforeach ?>
                  <?php else: ?>
                    <h3>Tidak Ada Pertanyaan</h3>
                  <?php endif; ?>
                  <!-- pagination -->
                  <hr>
                  <div>
                    <div class="page-pagination clear-fix" style="width:100%;">
                      <center><?php echo $this->ajax_pagination->create_links(); ?></center>  
                    </div>
                    <h5><b>Jumlah Pertanyaan :<?=$jumlah_postingan ?></b></h5>
                  </div>
                  <!-- / pagination -->