<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-57x57.png')?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-60x60.png')?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-72x72.png')?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-76x76.png')?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-114x114.png')?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-120x120.png')?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-144x144.png')?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-152x152.png')?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/mobile/img/favicons/apple-touch-icon-180x180.png')?>">
    <link rel="icon" type="image/png" href="<?=base_url('assets/mobile/img/favicons/favicon-32x32.png')?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?=base_url('assets/mobile/img/favicons/android-chrome-192x192.png')?>" sizes="192x192">
    <link rel="icon" type="image/png" href="<?=base_url('assets/mobile/img/favicons/favicon-96x96.png')?>" sizes="96x96">
    <link rel="icon" type="image/png" href="<?=base_url('assets/mobile/img/favicons/favicon-16x16.png')?>" sizes="16x16">
    <link rel="manifest" href="<?=base_url('assets/mobile/img/favicons/manifest.json')?>">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="<?=base_url('assets/mobile/img/favicons/mstile-144x144.png')?>">
    <meta name="theme-color" content="#ffffff">

    <title>{judul_halaman}</title>

    <link rel="stylesheet" href="<?=base_url('assets/mobile/bower_components/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/mobile/bower_components/framework7/dist/css/framework7.ios.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/mobile/bower_components/swipebox/src/css/swipebox.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/mobile/css/app.css')?>">
    <!--<link rel="stylesheet" href="" id="theme-style">-->
</head>
<body>
<div class="statusbar-overlay"></div>
<div class="panel-overlay"></div>
    <!-- Views -->
<div class="views">
    <div class="view view-main">

        <script type="text/javascript">var base_url = "<?= base_url() ?>"</script>
        <?php
        
        foreach ($files as $key) {
          include ($key);
        }
        ?>
    </div>
</div>

<!-- Footer Scripts -->
<script type="text/javascript" src="<?=base_url('assets/mobile/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- <script type="text/javascript" src="<?=base_url('assets/mobile/bower_components/framework7/dist/js/framework7.min.js')?>"></script> -->
<script type="text/javascript" src="<?=base_url('assets/mobile/bower_components/swipebox/src/js/jquery.swipebox.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/mobile/bower_components/jquery-validation/dist/jquery.validate.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/mobile/bower_components/Tweetie/tweetie.min.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/mobile/bower_components/chartjs/Chart.js')?>"></script>
<script type="text/javascript" src="<?=base_url('assets/mobile/js/jflickrfeed.min.js')?>"></script>
<!-- <script type="text/javascript" src="<?=base_url('assets/mobile/js/min/app.js')?>"></script> -->
</body>
</html>