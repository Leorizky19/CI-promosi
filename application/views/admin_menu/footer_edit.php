<div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Banner</h1>
		  
		  <form action="<?= base_url('admin_menu/footer_edit/'). $footer['id'];?>" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id" value="<?= $footer['id'];?>"></input>

          <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="judul" name="judul"  value="<?= $footer['judul'];?>"required>
		 <?= form_error('judul','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="fb" name="fb" value="<?= $footer['fb'];?>"required>
		 <?= form_error('fb','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="ig" name="ig" value="<?= $footer['ig'];?>"required>
		 <?= form_error('ig','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="tw" name="tw"  value="<?= $footer['tw'];?>"required>
		 <?= form_error('tw','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="yt" name="yt"  value="<?= $footer['yt'];?>"required>
		 <?= form_error('yt','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" placeholder="Image"required>
		 <?= form_error('image','<span class="text-danger ml-3">','</span>',);?>
		<label for="image" class="custom-file-label">Logo</label>
		</div>	
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Ubah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
