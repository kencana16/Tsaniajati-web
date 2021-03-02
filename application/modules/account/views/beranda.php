<div style="width:100%;background:url(<?=base_url()?>assets/dist/img/b1.jpg);background-attachment:fixed;">
<!----------- HEADER ----------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/bg01.jpg')?>" alt="First slide">
      <div id="head-pil1" class="p-2 rounded" style="background-color:rgb(0,0,0);opacity:0.6;">
        <div class="font-weight-bold text-yellow text-center" style="font-size:80px;">TSANIAJATI</div>
        <h5 class="font-weight-bold text-yellow mb-4 text-center" style="margin-top:-15px;letter-spacing:9.3px;">Furniture Harga Miring</h5>
        <h5 class="font-weight-bold text-yellow mb-4 text-center" style="margin-top:-15px;letter-spacing:9.3px;">Berkualitas Dan Terpercaya</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/bg04.png')?>" alt="Third slide">
      <div id="head-pil1" class="p-3">
        <div class="font-weight-bold text-yellow text-center" style="font-size:80px;">TSANIAJATI</div>
        <h5 class="font-weight-bold text-yellow mb-4 text-center" style="margin-top:-15px;letter-spacing:9.3px;">Furniture Harga Miring</h5>
        <h5 class="font-weight-bold text-yellow mb-4 text-center" style="margin-top:-15px;letter-spacing:9.3px;">Berkualitas Dan Terpercaya</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/dist/img/header/bg05.jpg')?>" alt="Third slide">
      <div id="head-pil1" class="p-3">
        <div class="font-weight-bold text-yellow text-center" style="font-size:80px;">TSANIAJATI</div>
        <h5 class="font-weight-bold text-yellow mb-4 text-center" style="margin-top:-15px;letter-spacing:9.3px;">Furniture Harga Miring</h5>
        <h5 class="font-weight-bold text-yellow mb-4 text-center" style="margin-top:-15px;letter-spacing:9.3px;">Berkualitas Dan Terpercaya</h5>
      </div>
    </div>
  </div>
</div>

<!------- WELCOME ------->
<div class="row mx-auto pl-5 pt-5 bg-white" style="width:100%;">
	<div id="welcome" class="row col-md-12 m-0">
    <div class="row col-md-12 mx-auto ml-3">
      <h1 class="text-black font-weight-bold ml-2">TSANIAJATI</h1>
    </div>
    <div class="row col-md-12 mx-auto">
      <div class="text-black font-weight-bold bg-dark ml-2" style="width:5%;height:5px;margin-top:0;"></div>
    </div>
    <div class="row col-md-6 mx-auto mt-3">
      <h3 class="text-black font-weight-light">"UMKM YANG BERGERAK DIBIDANG FURNITURE YANG BERADA DI JEPARA. KAMI MENGUTAMAKAN KEPUASAN PEMBELI DENGAN MEMBERIKAN PRODUK YANG BERKUALITAS DENGAN HARGA TERJANGKAU. HAPPY SHOPPING...”</h3>
    </div>
    <div class="row col-md-6">
      <img id="img-welcome" src="<?= base_url('assets/dist/img/coffee.png')?>">
    </div>
  </div>
  <!------- KATEGORI ------->
  <div class="row col-md-12 mt-5 mx-auto">
    <div class="col-md-12">
      <h4 class="text-dark font-weight-bold ml-3">Kategori</h4>
    </div>
    <div class="row col-md-12 mb-5 mx-auto">
      <div class="col-md-8">
        <?php foreach($category as $p){ ?>
          <div class="col-list-3">
            <div class="recent-car-list rounded">
                <a id="callout" href="<?= base_url('produk/daftar/'), $p['cat_id']; ?>" target="blank" style="text-decoration:none">
                  <div id="callout" class="callout callout-warning m-0 p-2">
                    <div class="row col-md-12">
                      <div class="col-md-3">
                        <img alt="foto" width="50px" src="<?= base_url('assets/dist/img/logoicak.png')?>">
                      </div>
                      <div class="col-md-9">
                        <h6 class="font-weight-bold m-0"><?= $p['cat_name']; ?></h6>
                        <h6 class="font-weight-light m-0" style="font-size:10px;">Harga Miring, Berkualitas Dan Terpercaya</h6>
                      </div>
                    </div>
                  </div>
                </a>
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>

<!------- PRODUK ------->
<div class="row mx-auto pb-5 pt-5" style="width:100%;background-color:rgb(255,255,255, .8)">
	<div class="row col-md-12 mx-auto">
    <h1 class="mx-auto text-black font-weight-bold">PRODUK KITA</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <hr class="mx-auto" style="width:5%;height:5px;margin-top:0;background:black;">
  </div>
  <div id="produk-kita" class="row mx-auto pl-5 pr-5" style="width: 100%;">
    <div class="col-md-12">
      <?php foreach($products as $p){ ?>
      <div class="col-list-4" style="border-radius:15px">
        <div id="myProduct" class="recent-car-list ml-3" >
            <div class="col-lg text-dark justify-content-center p-0">
            <a href="<?= base_url('beranda/detail/'.$p['prod_id'])?>" target="blank">
                <div class="card m-0 shadow" style="border-radius:15px">
                    <div  class="card-header text-center m-0">
                        <img src="<?= base_url()?>gambar/<?= $p['prod_img']; ?>" class="card-img-top rounded" alt="image">
                        <div class="middle">
                          <?php
                          if(!$p['quantity'] == 0 ){?>
                              <div class="alert alert-success shadow font-weight-bold p-2"><?= 'Ready Stok';?></div>
                          <?php }else{ ?>
                              <div class="alert alert-danger shadow font-weight-bold p-2"><?= 'Pree Order';?></div>
                          <?php } ?>
                      </div>
                    </div>
                        
                    <div class="card-body p-0" style="margin-bottom:-10px;">
                        <div class="col-md-12 bg-dark p-2">
                            <h5 class="text-white font-weight-bold m-0"><?= $p['prod_name']; ?></h5>
                        </div>
                        <div class="col-md-12  p-2">
                            <table class="ml-2">
                                <tbody>
                                    <tr>
                                        <td><small class="text-dark">Harga</small></td>
                                        <td width="10px" align="center">:</td>
                                        <td><small class="text-success font-weight-bold font-italic">Rp. <?= number_format($p['prod_price']) ?>,-</small></td>
                                    </tr>
                                    <tr>
                                        <td><small class="text-dark">Kategori</small></td>
                                        <td width="10px" align="center">:</td>
                                        <td><small class="badge badge-warning"><?= $p['cat_name']; ?></small></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><hr>
                    <div class="col-md-12 mb-3">
                      <?php
                      if(!$p['quantity'] == 0 ){?>
                          <?php echo anchor('cart/add_cart/'.$p['prod_id'],'<div class="btn btn-sm btn-outline-warning text-dark float-right mr-1"><i class="fas fa-cart-plus"></i> Beli Sekarang</div>')?>
                      <?php }else{ ?>
                          <div class="font-weight-bold text-danger text-center p-1 m-0">Stok Habis</div>
                      <?php } ?>
                  </div>
                </div>
            </a>
            </div>
        </div>
      </div>
      <?php } ?>
    </div>
    <div class="col-md-12 text-center mt-5">
      <a href="<?= base_url('produk');?>" class="btn btn-outline-dark btn-lg">Muat Lebih Banyak</a>
    </div>
  </div>
</div>



</div>
    
    
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<script>
function openPills(cityName) {
  var i;
  var x = document.getElementsByClassName("pills");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";
}
</script>