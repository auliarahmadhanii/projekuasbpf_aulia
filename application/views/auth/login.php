
<body>
  <div class="container-scroller d-flex" >
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0" >
        <div class="row w-100 mx-0" >
          <div class="col-lg-4 mx-auto" >
            <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background-color:#F0F8FF;">
              <div class="brand-logo">
               
              </div>
             <center> <h2>AULIA APOTEK</h2> </center>
              
              <?= $this->session->flashdata('message'); ?>
              <form class="user" method="post" action="<?= base_url('Auth/cek_login'); ?>">
              <form class="pt-3">
                <div class="form-group">
                  <input type="email" name="email"  value="<?= set_value('email'); ?>" class="form-control form-control-lg" id="email" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                  <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control form-control-lg" id="password" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="mt-3">
                   <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" >SIGN IN</a>  -->
                   <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                                        SIGN IN
                                    </button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a  href="<?= base_url() ?>auth/registrasi" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  

