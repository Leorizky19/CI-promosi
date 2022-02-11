 <!-- Begin Page Content -->
 <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Banner</h1>
		  
		  <form action="<?= base_url('admin_menu/banner_image_edit/'). $banner_image['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $banner_image['id'];?>"></input>
		  
		   <div class="modal-body">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="text" name="text"  value="<?= $banner_image['text'];?>"required>
		<?= form_error('text','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<input type="text" class="form-control" id="texts" name="texts" 
		 value="<?= $banner_image['texts'];?>"required>
		<?= form_error('texts','<span class="text-danger ml-3">','</span>',);?>
		</div>	
        <div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" value="<?= $banner_image['image']?>"required>
		<label for="image" class="custom-file-label"></label>
		 <?= form_error('image','<span class="text-danger ml-3">','</span>',);?>
		</div>	
	
        <div class="modal-footer">
        
          <button type=" submit" class="btn btn-primary">Ubah</button>
        </div>
		</form>
      </div>
    </div>
	</div>