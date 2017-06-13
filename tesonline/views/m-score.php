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
                <div class="center sliding">Latihan</div>
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

                    <h3 class="text-center" style="color: white">Score <?=$nm_latihan?></h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <?php foreach ($report as $reportitem): ?>
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
    window.onload = function() {
        var data      = <?php echo json_encode($reportitem,JSON_NUMERIC_CHECK);?>;
        var report = {
                    durasi: 0,
                    level: 0,
                    poin: 0,
                    konstanta: 0,
                    score: 0};

                    report.jumlah_soal = parseInt(data.jumlahSoal);
                    report.level = parseInt(data.tingkatKesulitan);
                    report.poin = parseInt(data.jmlh_benar);
                    report.score = data.jmlh_benar;
                    var chart = new CanvasJS.Chart("chartContainer", {
                      title: {
                        text: "nama latihan : " + data.nm_latihan + " - Score : " + report.score

                      },
                      animationEnabled: true,
                      theme: "theme1",
                      data: [
                      {
                        type: "doughnut",
                        indexLabelFontFamily: "Garamond",
                        indexLabelFontSize: 16,
                        startAngle: 0,
                        indexLabelFontColor: "dimgrey",
                        indexLabelLineColor: "darkgrey",
                        toolTipContent: "Jumlah : {y} ",
                        dataPoints: [
                        {y: data.jmlh_benar, indexLabel: "Poin {y}"},
                        {y: data.jmlh_salah, indexLabel: "Salah {y}"},
                        {y: data.jmlh_kosong, indexLabel: "Kosong {y}"}

                        ]

                      }

                      ]

                    });

                    chart.render();

    }
</script>