<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block my-auto ">
              <img src=" <?= base_url('back-end/img/auth.png') ?> " width="500px" alt="">
            </div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login User</h1>
                  <?= $this->session->flashdata('pesan'); ?>
                </div>
                <form class="user" method="POST" action="<?= base_url('auth/validasi'); ?>">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>

                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>

                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="<?= base_url('auth/registrasi') ?>">Buat Akun Baru!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>