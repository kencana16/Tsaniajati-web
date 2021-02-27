<!------- WELCOME ------->
<div class="row mx-auto pl-5 pb-5 pt-5 bg-white" style="width:100%;background-size:cover;background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)),url(<?= base_url('assets/dist/img/login.jpg') ?>) repeat-x;align-item:center">
	<div class="row col-md-12 mx-auto">
    <h1 class="text-white font-weight-bold mx-auto">WELCOME TO TSANIAJATI</h1>
  </div>
	<div class="row col-md-12 mx-auto">
    <div class="text-dark font-weight-bold bg-dark mx-auto" style="width:5%;height:5px;margin-top:0;"></div>
  </div>

  <div class="col-md-12">
    <!-- FORM LOGIN -->
    <div class="border rounded bg-light col-md-4 login-card-body mx-auto mt-3">
      <div class="row justify-content-end">
      </div>
      <div class="register-logo">
        <div class="font-weight-bold" href="beranda">LOGIN</div>
      </div>
        <?= $this->session->flashdata('message');?>
        <form method="post" action="<?= base_url('login');?>">
        <div class="input-group mb-4">
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username');?>">
          <div class="input-group-append">
            <div class="bg-white input-group-text">
              <span class="text-dark fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <?= form_error('username','<small class="text-danger pl-3" style="margin-top:-25px;">','</small>');?>
        </div>
        <div class="input-group mb-4">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="bg-white input-group-append">
            <div class="input-group-text">
              <span class="text-dark fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <?= form_error('password','<small class="text-danger pl-3" style="margin-top:-25px;">','</small>');?>
        </div>
        <div class="row">
          <div class="col-4">
            <input type="submit" class="btn text-white btn-block" style="background:#8a8542" name="btnSubmit" value="Login" />
          </div>
        </div>
      </form>
    </div>

    <!-- BELUM PUNYA AKUN -->
    <div class="col-md-7 mx-auto text-center mt-3">
      <p class="font-weight-bold p-2 mb-2 rounded text-white">Belum mempunyai akun?, silahkan daftar terlebih dahulu.</p>
      <a href="<?php echo base_url('login/register');?>" class="btn btn-md text-white pr-5 pl-5" style="background:#8a8542">
        <i class="fas fa-user mr-1"></i> Register
      </a>
    </div>
  </div>
	
</div>

