<!------- FOOTER ------->
<div class="row mx-auto bg-white pb-5" style="box-shadow: 0 4px 30px 0 rgba(0, 0, 0, 0.3)">
	<div class="col-lg-2 pt-5 mx-auto">
		<div class="col-footer">
			<img src="<?= base_url('assets/dist/img/logoicak.png')?>" class="w-50 mb-3"><br>
      <small class="font-italic">Follow Us</small><br>
      <a href="#" class="fa fa-facebook text-center text-secondary p-2 rounded" style="font-size:20px;"></a>
      <a href="#" class="fa fa-instagram text-center text-secondary p-2 rounded" style="font-size:20px;"></a>
      <a href="#" class="fa fa-whatsapp text-center text-secondary p-2 rounded" style="font-size:20px;"></a>
      <a href="#" class="fa fa-google text-center text-secondary p-2 rounded" style="font-size:20px;"></a>
		</div>
  </div>
	<div class="col-lg-2 pt-5 mx-auto">
		<div class="col-footer">
			<p class="font-weight-bold text-white badge badge-dark" style="font-size:20px">Tsania Jati Furniture</p>
			<p style="#8a8542" class="card-text font-weight-bold">
      About Us<br>
      Video<br>
      Stores<br>
      Showroom<br>
      Privacy Policy<br>
      Terms & Condition<br>
      Work at The Goods</p>
		</div>
  </div>
	<div class="col-lg-2 pt-5 mx-auto">
		<div class="col-footer">
			<p class="font-weight-bold text-white badge badge-dark" style="font-size:20px">Customer Service</p>
			<p style="#8a8542" class="card-text font-weight-bold">
      Contact Us<br>
      F.A.Q<br>
      Delivery Info<br>
      How to Buy<br>
      Payment Confirmation</p>
		</div>
  </div>
</div>
  <div class="row col-md-12 p-3 m-0" style="background-color:#8a8542;">
    <h5 class="text-white font-weight-light m-0 mx-auto">Copyright © 2020 | Powered by TSANIAJATI</h5>
  
  </div>

<a href="javascript:void(0);" id="scroll" title="Back To Top" style="display: none;">TOP<span></span></a>

<!------- WATSAPP POP UP ------->
<div id="wa-pop" class="dropdown">
    <a class="btn btn-success btn-sm font-weight-bold float-right p-2 shadow" role="button" id="cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;border-radius:50px">
        <img src="<?= base_url('assets/dist/img/wa.png')?>" width="35" alt="Whatsapp">
    </a>
    <div class="dropdown-menu dropdown-menu-right p-0 mb-2 ml-2" aria-labelledby="cart">
      <div class="card bg-light m-0 shadow" style="width:300px;">
        <div class="card-header bg-success"><h4 class="text-white m-0">Mulai Konsultasi</h4></div>
        <div class="card-body p-3">
          <small class="card-title text-gray mb-2" style="font-size:10px;">Hubungi kami jalur pribadi</small>
          <p class="card-text">
            <a href="https://bit.ly/2Prl2YS" id="callout" target="blank" style="text-decoration:none">
            <div id="callout" class="callout callout-success m-0 p-2">
              <div class="row col-md-12">
                <div class="col-md-3">
                  <img alt="foto" width="50px" src="<?= base_url('assets/dist/img/favicon.png')?>">
                </div>
                <div class="col-md-9">
                  <h6 class="font-weight-bold m-0">TSANIA JATI FURNITURE</h6>
                  <h6 class="font-weight-light m-0" style="font-size:10px;">Furniture Harga Miring</h6>
                </div>
              </div>
            </div>
            </a>
          </p>
        </div>
      </div>
    </div>
</div>

<!------- CONTACT POP UP ------->
<button id="myBtn" class="btn btn-warning btn-sm font-weight-bold float-right p-2 pl-3 pr-3 shadow">
  <h5 class="text-dark m-0"><i class="fas fa-comments mt-1 mr-1"></i> Komentar</h5>
</button>
  <div id="myModal" class="modal-contact">
    <div class="modal-contact-content card bg-light m-0 shadow">
      <div class="card-header text-white" style="background-color:#8a8542;">
        <span class="close-contact"></span>
        <h4 class="text-white font-weight-bold m-0">Hubungi Kami</h4>
        <small>Kami siap melayani anda. Berikan komentar anda untuk kami.</small>
      </div>
      <form class="form-horizontal col-md-12" action="<?= base_url('beranda/addKomentar'); ?>" method="post" enctype="multipart/form-data" role="form">
        <div class="card-body" style="padding:10px 0">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-12 mb-1">
                <input class="form-control" placeholder="Nama Lengkap" name="nama" required/>
              </div>
              <div class="col-md-12 mb-1">
                  <input type="text" class="form-control" placeholder="No.Telp" name="telp">
              </div>
              <div class="col-md-12 mb-1">
                  <input type="email" class="form-control" placeholder="Email" name="email" required/>
              </div>
              <div class="col-md-12 mb-1">
                  <textarea class="form-control" placeholder="Komentar" name="komen"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer p-2">
          <button class="btn text-white" style="background-color:#8a8542;" type="submit"> Kirim&nbsp;</button>
        </div>
      </form>
    </div>
  </div>

<!------- Modal Contact ------->
<script>
  var modal = document.getElementById("myModal");
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("close-contact")[0];
  btn.onclick = function() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
</script>

<!------- Optional JavaScript ------->
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>
  <script src="<?= base_url('assets/dist/js/code.jquery.js')?>"></script>
	<script src="<?= base_url('assets/dist/js/cdn.jsdelivr.js')?>"></script>
	<script src="<?= base_url('assets/dist/js/stackpath.bootstrapcdn.js')?>"></script>
	<script src="<?= base_url('assets/dist/js/ScrollSmooth.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
  <script src="<?= base_url('assets/dist/js/jquery.min.js')?>"></script>
	<script src="<?= base_url('assets/dist/js/jquery.scrolly.min.js')?>"></script>
	<script src="<?= base_url('assets/dist/js/skel.min.js')?>"></script>
	<script src="<?= base_url('assets/dist/js/util.js')?>"></script>
  <script src="<?= base_url('assets/dist/js/main.js')?>"></script>
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!------- BACK TO TOP ------->
<script type="text/javascript">
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('#scroll').fadeIn();
        }else{
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});
</script>

<!------- POP OVER ------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();   
});
</script>


<!------- AJAX SEARCH AUTOCOMPLETE ------->
<script src="<?= base_url('assets/dist/js/autocomplete/handlebars.js')?>"></script>
<script src="<?= base_url('assets/dist/js/autocomplete/typeahead.bundle.js')?>"></script>
<script>
  $(document).ready(function(){
    var sample_data = new Bloodhound({
      datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      prefetch:'<?= base_url(); ?>beranda/fetch',
      remote:{
        url:'<?= base_url(); ?>beranda/fetch/%QUERY',
        wildcard:'%QUERY'
      }
    });


    $('#prefetch .typeahead').typeahead(null, {
      name: 'sample_data',
      display: 'name',
      source:sample_data,
      limit:10,
      templates:{
        suggestion:Handlebars.compile(
          '<div id="search-show" class="row mx-auto p-2 shadow"><div class="col-md-3" style="padding-right:5px; padding-left:5px;"><img src="<?= base_url()?>gambar/{{image}}" class="img-thumbnail" width="48" /></div><div class="col-md-9"><span class="font-weight-bold text-dark">{{name}}</span><br><small class="font-italic text-dark">Rp. {{price}},-</small></div></div>'
          )
      }
    });
  });
</script>

<!------- AJAX SEARCH CART ------->
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?= base_url(); ?>cart/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<script>
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  //WELCOME TO K⍜PIKU
  if (document.body.scrollTop > 550 || document.documentElement.scrollTop > 250) {
    document.getElementById("welcome").style.opacity = "1";
    document.getElementById("welcome").style.paddingTop = "0";
  } else {
    document.getElementById("welcome").style.opacity = "0";
    document.getElementById("welcome").style.paddingTop = "80px";
  }

  //PRODUK KITA
  if (document.body.scrollTop > 850 || document.documentElement.scrollTop > 850) {
    document.getElementById("produk-kita").style.opacity = "1";
    document.getElementById("produk-kita").style.paddingTop = "0";
  } else {
    document.getElementById("produk-kita").style.opacity = "0";
    document.getElementById("produk-kita").style.paddingTop = "80px";
  }
}
</script>

<script>
$(document).ready(function(){
$("#message-center").modal('show');
});
</script>