<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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

                    <h3 class="text-center" style="color: white">Mulai Latihan untuk pelajaran <?=$mp;?></h3>
                    <div class="row mb-30" style="background-color: #fff">
                        <div class="col-100">
                            <div style="margin-left: 20px; padding: 10px;">
                                <h4>Bab</h4>
                                <?php foreach ($bab as $b) :?>
                                    <input type="radio" name="bab" value="<?=$b['id']?>" id="babSelect"/><?=$b['judulBab']?> <br>
                                <?php endforeach ?>
                                <h4>Subab</h4>
                                <input type="radio" name="subab" id="subSelect"/>
                                <h4>Tingkat Kesulitan</h4>
                                <select>
                                    <option>Mudah</option>
                                    <option>Sedang</option>
                                </select> <br>
                                in
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript">
    function submit(id) {
        window.location.href = base_url + "index.php/tesonline/next/" + id;    
    }

    $('#babSelect').click(function () {
        load_sub($('#babSelect').val());
    });

    function load_sub(babID) {
        $.ajax({
            type: "POST",
            data: babID.bab_id,
            url: "<?php echo base_url() ?>index.php/videoback/getSubbab/" + babID,
            success: function (data) {
                console.log(data);
                $('#subSelect').html('<input type=text value=0>');
                $.each(data, function (i, data) {
                    $('#subSelect').html('<input type=text value=0>aa');
                    // $('#subSelect').append("<input type=radio value='" + data.id + "'>" + data.judulSubBab + "</br>");
                });
            }
        });
    }

</script>