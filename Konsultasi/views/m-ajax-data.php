<style type="text/css">
  /* Pagination */
div.pagination {
  font-family: "Lucida Sans Unicode", "Lucida Grande", LucidaGrande, "Lucida Sans", Geneva, Verdana, sans-serif;
  padding:2px;
  margin: 20px 10px;
  float: right;
  color: white;
}

div.pagination a {
  margin: 2px;
  padding: 0.5em 0.64em 0.43em 0.64em;
  background-color: #FD1C5B;
  text-decoration: none; /* no underline */
  color: #fff;
}
div.pagination a:hover, div.pagination a:active {
  padding: 0.5em 0.64em 0.43em 0.64em;
  margin: 2px;
  background-color: #FD1C5B;
  color: #fff;
}
div.pagination span.current {
    padding: 0.5em 0.64em 0.43em 0.64em;
    margin: 2px;
    background-color: #f6efcc;
    color: #6d643c;
  }
div.pagination span.disabled {
    display:none;
  }
.pagination ul li{display: inline-block;}
.pagination ul li a.active{opacity: .5;}

/* loading */
.loading{position: absolute;left: 0; top: 0; right: 0; bottom: 0;z-index: 2;background: rgba(255,255,255,0.7);}
.loading .content {
    position: absolute;
    transform: translateY(-50%);
     -webkit-transform: translateY(-50%);
     -ms-transform: translateY(-50%);
    top: 50%;
    left: 0;
    right: 0;
    text-align: center;
    color: #555;
}
</style>
<?php if(!empty($my_questions)): foreach($my_questions as $question): ?>
    <div class="list-block media-list mt-0 mb-0 comments-list">
      <div class="item-link item-content">
        <div class="item-media">
          <img src="<?=base_url("assets/image/photo/siswa/".$question['photo'])?>" alt=""/>
        </div>
        <div class="item-inner">
          <div class="row mt-5">
            <div class="col-50 product">
              <h3>
                <a onclick="single_konsul(<?=$question['pertanyaanID'] ?>)">
                  <p><i class="fa fa-quote-left"></i> <?=$question['judulPertanyaan'] ?> (<?=$question['date_created'] ?>) <i class="fa fa-quote-right" aria-hidden="true"></i></p> <br>
                  <?=$question['isiPertanyaan'] ?>
                </a>
              </h3>
            </div>
            <div class="col-50 author text-right">
              <?=$question['namaDepan']." ".$question['namaBelakang'] ?>
            </div>
          </div>
          <div class="text-right">
            <h6>
              <a href="<?=base_url('konsultasi/filter/'.str_replace(' ', '_', $question['namaMataPelajaran']).'/all') ?>"><i class="fa fa-tags text-theme-color-2"></i> <?=$question['namaMataPelajaran'] ?></a> | 
              <a href="<?=base_url('konsultasi/filter/'.str_replace(' ', '_', $question['namaMataPelajaran']).'/'.str_replace(' ', '_', $question['judulBab'])) ?>  "><i class="fa fa-puzzle-piece text-theme-color-2"></i> <?=$question['judulBab'] ?></a> |
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
<?php endforeach; else: ?>
  <p>Post(s) not available.</p>
<?php endif; ?>
<div class="clear"></div>
<?php echo $this->ajax_pagination->create_links(); ?>