<form>
  <input type="hidden" name="tingkat" value="{alias_tingkat}">
  <input type="hidden" name="pelajaran" value="{alias_pelajaran}">
</form>
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
                <div class="page-content">
                    <div class="content-block mb-15">
                        <div class="buttons-row">
                            <a href="#tab1-1" class="tab-link active button button-primary">All</a>
                            <a href="#tab2-1" class="tab-link button button-primary">Room</a>
                            <a href="#tab3-1" class="tab-link button button-primary">Screen</a>
                        </div>
                    </div>
                    <div class="tabs-animated-wrap">
                        <div class="tabs">
                            <!-- ALL -->
                            <div id="tab1-1" class="tab active">
                                <div class="content-block mt-15">
                                <?php foreach ($bab_video as $bab_video_items) { ?>
                                    <?php if ($bab_video_items->jenis_video == 1): ?> 
                                        <p><a onclick="videosub(<?=$bab_video_items->videoID;?>)"><?php echo $bab_video_items->judulVideo ;?>(S)</a></p>
                                    <?php else : ?>
                                        <p><a onclick="videosub(<?=$bab_video_items->videoID;?>)"><?php echo $bab_video_items->judulVideo ;?>(R)</a></p>
                                    <?php endif ?>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- / ALL -->
                            <!-- ROOM -->
                            <div id="tab2-1" class="tab">
                                <div class="content-block mt-15">
                                <?php foreach ($bab_video as $bab_video_items) {?>
                                    <?php if ($bab_video_items->jenis_video == 2): ?> 
                                        <p><a onclick="videosub(<?=$bab_video_items->videoID;?>)"><?php echo $bab_video_items->judulVideo ;?>(R)</a></p>
                                    <?php endif ?>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- / ROOM --> 
                            <!-- SCREEN -->
                            <div id="tab3-1" class="tab">
                                <div class="content-block mt-15">
                                <?php foreach ($bab_video as $bab_video_items) {?>
                                    <?php if ($bab_video_items->jenis_video == 1): ?> 
                                        <p><a onclick="videosub(<?=$bab_video_items->videoID;?>)"><?php echo $bab_video_items->judulVideo ;?>(S)</a></p>
                                    <?php endif ?>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- / SCREEN -->                        
                        </div>
                    </div>
        
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function videosub(videoID) {
        console.log(videoID);
        window.location.href = base_url + "video/seevideo/"+videoID;
    }
</script>