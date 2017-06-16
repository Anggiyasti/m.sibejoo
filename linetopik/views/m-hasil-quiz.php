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
                <br>
                    <ul>
                        <table  class="table table-striped">
                            <tbody>
                                <tr class="">
                                    <th>Syarat Lulus</th>
                                    <th>:</th>
                                    <td>Benar <?=$data['syarat'];?> dari <?=$data['jumlahsoal'];?> soal</td>
                                </tr>

                                <tr class="cart-subtotal">
                                    <th>Jumlah Benar  </th>
                                    <th>:</th>
                                    <td><span class="amount"> <?=$data['jumlahBenar'];?></span></td>
                                </tr>
                                <tr class="shipping">
                                    <th>Jumlah Salah </th>
                                    <th>:</th>
                                    <td>    
                                        <?=$data['jumlahSalah'];?>      
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>Jumlah Kosong </th>
                                    <th>:</th>
                                    <td><span class="amount"><?=$data['jumlahKosong'];?></span></td>
                                </tr> 
                                <tr class="order-total">
                                    <th>Hasil </th>
                                    <th>:</th>
                                    <td><span class="amount"> <?=$data['hasil'];?></span></td>
                                </tr>           
                            </tbody>
                        </table>
                    </ul>          
                </div>
                </div>
            </div>
        </div>

    </div>
</div>


