 <!-- Begin Page Content -->
 <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit </h1>
		  
		  <form action="<?= base_url('admin_menu/address_edit/'). $address['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $address['id'];?>"></input>

          <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="alamat" name="alamat"  value="<?= $address['alamat'];?>"required>
		 <?= form_error('alamat','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="email" name="email"  value="<?= $address['email'];?>"required>
		 <?= form_error('email','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="telepon" name="telepon"  value="<?= $address['telepon'];?>"required>
		 <?= form_error('telepon','<span class="text-danger ml-3">','</span>',);?>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Ubah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
