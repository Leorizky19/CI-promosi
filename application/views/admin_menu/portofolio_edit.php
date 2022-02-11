 <!-- Begin Page Content -->
 <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Portofolio</h1>
		  
		  <form action="<?= base_url('admin_menu/portofolio_edit/'). $portofolio['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $portofolio['id'];?>"></input>
		  
		   <div class="modal-body">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="judul" name="judul"  value="<?= $portofolio['judul'];?>"required>
		<?= form_error('judul','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<input type="text" class="form-control" id="link" name="link" 
		 value="<?= $portofolio['link'];?>"required>
		<?= form_error('texts','<span class="text-danger ml-3">','</span>',);?>
		</div>	
        <div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" value="<?= $portofolio['image']?>"required>
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