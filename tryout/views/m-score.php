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
                <div class="center sliding">Tryout</div>
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

                    <h3 class="text-center" style="color: white">Score {nama_paket}</h3>
                    <?php $a="a"; ?>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php foreach ($paket_dikerjakan as $reportitem): ?>
            <?php endforeach ?>
                            <div class="chart">
                              <div id="chartContainer" style="height: 200px;padding-top: 0px;">
                              </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    </div>
</div>
<script src="<?= base_url('assets/back/plugins/canvasjs.min.js') ?>"></script>
<script type="text/javascript">
    function paket() {
        window.location.href = base_url + "video";
    }
    function lihat_detail(id_paket){
      window.location.href = base_url + "tryout/score/"+id_paket;
    }
    window.onload = function() {
        var data      = <?php echo json_encode($reportitem,JSON_NUMERIC_CHECK);?>;
        nilai =data.jmlh_benar/ data.jumlah_soal * 100;

      var chart = new CanvasJS.Chart("chartContainer", {

         title: {
          text: data.nm_paket,
          fontSize: 20
          
        },
        subtitles:[
        {
          text: "Nilai : "+nilai.toFixed(2),
          //Uncomment properties below to see how they behave
          //fontColor: "red",
          fontSize: 14
        }
        ],
        animationEnabled: true,
        theme: "theme1",
        data: [
        {
          type: "doughnut",
          indexLabelFontFamily: "Garamond",
          indexLabelFontSize: 18,
          startAngle: 0,
          indexLabelFontColor: "dimgrey",
          indexLabelLineColor: "darkgrey",
          toolTipContent: "Jumlah : {y} ",

          dataPoints: [
          { y: data.jmlh_salah, indexLabel: "Salah {y}" },
          { y: data.jmlh_kosong, indexLabel: "Kosong {y}" },
          { y: data.jmlh_benar, indexLabel: "Benar {y}" },
          ]
        }
        ]
      });
       chart.render();
    }
</script>