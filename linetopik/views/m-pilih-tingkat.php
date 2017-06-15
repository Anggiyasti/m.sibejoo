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
                <div class="list-block mt-0 blog-box">
                    <ul>

                        <li>
                            <a onclick="lineMapel(1)"
                                class="item-link item-content item-content-icon item-content-icon-slider">
                                <div class="item-inner blog-list">
                                    <div class="text">
                                        <h4 class="title mt-5 mb-0">SD</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a onclick="lineMapel(2)"
                                class="item-link item-content item-content-icon item-content-icon-slider">
                                <div class="item-inner blog-list">
                                    <div class="text">
                                        <h4 class="title mt-5 mb-0">SMP</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a onclick="lineMapel(3)" 
                                class="item-link item-content item-content-icon item-content-icon-slider">
                                <div class="item-inner blog-list">
                                    <div class="text">
                                        <h4 class="title mt-5 mb-0">SMA</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a onclick="lineMapel(4)" 
                                class="item-link item-content item-content-icon item-content-icon-slider">
                                <div class="item-inner blog-list">
                                    <div class="text">
                                        <h4 class="title mt-5 mb-0">SMA IPA</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a onclick="lineMapel(5)" 
                                class="item-link item-content item-content-icon item-content-icon-slider">
                                <div class="item-inner blog-list">
                                    <div class="text">
                                        <h4 class="title mt-5 mb-0">SMA IPS</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>          
                </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
    function lineMapel(id_tingkat) {
        url_ajax = base_url+"linetopik/ambiltingkat";

        var global_properties = {
          id_tingkat: id_tingkat
        };

        $.ajax({
          type: "POST",
          dataType: "JSON",
          url: url_ajax,
          data: global_properties,
          success: function(data){
            window.location.href = base_url + "linetopik/lineMapel";  
          },error:function(data){
            sweetAlert("Oops...", "wah, gagal menghubungkan!", "error");
          }

        });
    }
    
</script>
