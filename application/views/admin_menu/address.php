 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
		  
		  <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahaddressModal"> Tambah Address</a>
		  
		  <?= $this->session->flashdata('pesan');?>
		  
		  <!-- Tampil data -->
		  
			  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">Telepon</th>
	  <th scope="col">Aksi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
 <p hidden> <?= $nomor = 1; ?> </p>
  <?php foreach ($address as $add):?>
    <tr>
      <th scope="row"><?= $nomor ++; ?> </th>
      <td><?= $add ['alamat']; ?></td>
      <td><?= $add['email']; ?></td>
      <td><?= $add ['telepon']; ?></td>
	  <td> 
    <a class="btn btn-primary btn-sm mb-1" href="<?= base_url('admin_menu/address_edit/') .$add ['id'];?>">Edit </a>
	 <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');"
					  href="<?= base_url('admin_menu/hapus_address/') . $add['id']; ?>" >Hapus</a>
	  </td>
    </tr>
	</tr>
	 <?php endforeach;?>
  </tbody>
</table>
  </div>
        <!-- /.container-fluid -->

       </div>
		
      <!-- Address Modal-->
  <div class="modal fade" id="tambahaddressModal" tabindex="-1" role="dialog" aria-labelledby="tambahaddressModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahaddressModalLabel">Tambah Address</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
		<form action="<?= base_url('admin_menu/address/');?>" method="POST">
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="alamat" name="alamat"  placeholder="Alamat"required>
		 <?= form_error('alamat','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="email" name="email"  placeholder="Email"required>
		 <?= form_error('email','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="telepon" name="telepon"  placeholder="Telepon"required>
		 <?= form_error('telepon','<span class="text-danger ml-3">','</span>',);?>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Tambah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
