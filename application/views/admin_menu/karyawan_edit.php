<div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Banner</h1>
		  
		  <form action="<?= base_url('admin_menu/karyawan_edit/'). $karyawan['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $karyawan['id'];?>"></input>
          <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="nm_kry" name="nm_kry"  value="<?= $karyawan['nm_kry'];?>"required>
		 <?= form_error('nm_kry','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="fb" name="fb"  value="<?= $karyawan['fb'];?>"required>
		 <?= form_error('fb','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="ig" name="ig"  value="<?= $karyawan['ig'];?>"required>
		 <?= form_error('ig','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="tw" name="tw"  value="<?= $karyawan['tw'];?>"required>
		 <?= form_error('tw','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="jbt" name="jbt"  value="<?= $karyawan['jbt'];?>"required>
		 <?= form_error('jbt','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" placeholder="Image"required>
		<label for="image" class="custom-file-label">Foto</label>
		 <?= form_error('image','<span class="text-danger ml-3">','</span>',);?>
		</div>	
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Tambah</button>
        </div>
		</form>
      </div>
    </div>
  </div>