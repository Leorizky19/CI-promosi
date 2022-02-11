

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block my-auto">
		   <img src=" <?= base_url('back-end/img/auth.png')?> "width="500px" alt="">
		  </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
              </div>
              <form class="user" method="POST" action="<?= base_url('auth/registrasi');?>">
             
                  <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap">
				  <?= form_error('nama','<span class="text-danger ml-3">','</span>',);?>
				 
                </div>
				
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                 <?= form_error('email','<span class="text-danger ml-3">','</span>',);?>
				</div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                   <?= form_error('password1','<span class="text-danger ml-3">','</span>',);?>
				  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password!">
                  <?= form_error('password2','<span class="text-danger ml-3">','</span>',);?>
				 </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
				  </button>
                </a>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('auth')?>">Sudah Punya Akun? Silahkan Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

 