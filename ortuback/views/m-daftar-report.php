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
                <div class="page-content" style="margin-right: 10px; margin-left: 10px;">

                    <h3 class="text-center" style="color: white">Daftar Pesan</h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <!-- <select class="form-control" name="jenis">
                              <option value="all">Semua Jenis</option>
                              <option value="nilai">Nilai</option>
                              <option value="absen">Absen</option>
                              <option value="umum">Umum</option>
                            </select> -->
                                <?php foreach ($msg as $pesan) : ?>
                                    <blockquote>
                                        Pesan : <?=$pesan['isi']?> <br>
                                        Jenis : <?=$pesan['jenis']?> <br>
                                        Tanggal : <?=$pesan['date_created']?>
                                        <input type="text" name="tes" value="<?=$pesan['date_created']?>" hidden="true">
                                    </blockquote>
                                <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function paket() {
        window.location.href = base_url + "video";
    }

    function detail_paket(id_paket){
      window.location.href = base_url + "tryout/score/"+id_paket;
    }

    function pembahasanto(id_to){
        var kelas = ".modal-on"+id_to;
        var data_to = $(kelas).data('todo');
        url = base_url+"index.php/tryout/buatpembahasan";

        var datas = {
          id_paket:data_to.id_paket,
          id_tryout:data_to.id_tryout,
          id_mm_tryoutpaket:data_to.id
        }

        $.ajax({
          url : url,
          type: "POST",
          data: datas,
          dataType: "TEXT",
          success: function(data)
          {
            window.location.href = base_url + "index.php/tryout/mulaipembahasan";
          },
            error: function (jqXHR, textStatus, errorThrown)
          {
            swal("gagal");
        }
      });
  }
</script>