 <!-- Begin Page Content -->
 <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit About Detail</h1>
		  
		  <form action="<?= base_url('admin_menu/about_detail_edit/'). $about_detail['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $about_detail['id'];?>"></input>
		  
		   <div class="modal-body">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="judul" name="judul"  value="<?= $about_detail['judul'];?>"required>
		<?= form_error('judul','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<input type="text" class="form-control" id="text" name="text" 
		 value="<?= $about_detail['text'];?>"required>
		<?= form_error('text','<span class="text-danger ml-3">','</span>',);?>
		</div>	
        <div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" value="<?= $about_detail['image']?>"required>
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