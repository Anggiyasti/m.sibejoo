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


    <div class="pages">
        <div class="page no-toolbar" data-page="contact">
            <div class="page-content">

                <br><br>
                <div class="content-block mt-0 mb-0">
                    <div class="forms">
                        <div class="item-input">
                                        <form class="woocommerce-ordering" method="get">
                            <select id="sortBy" onchange="searchFilter()" class="orderby">
                                <option value="">Urutkan</option>
                                <option value="asc">Judul A-Z</option>
                                <option value="desc">Judul Z-A</option>
                                <option value="date_created">Terbaru</option>
                            </select>
                        </form>
                                    </div>
                                    
                    </div>
                </div>


            </div>
        </div>
    </div>


<script type="text/javascript">
    function simpan() {
    data =  
    {
      donasi:$('select[name=donasi]').val()
    };

    if (!data.donasi) {
      swal('Silahkan pilih donasi yang akan anda lakukan');
    }else{
      var url = base_url+"donasi/tambah_donasi";
      $.ajax({
        data:data,
        datatType:"text",
        url:url,
        type:"POST",
        success:function(data){
          console.log(data);
          swal('Donasi berhasil ditambahkan');
          // location.reload();
          load_status_donasi();
        },
        error:function(){
          sweetAlert('Data gagal disimpan','error');
        }
      });
    }
  }
</script>