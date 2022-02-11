 <!-- Begin Page Content -->
        <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit About</h1>
		  
		  <form action="<?= base_url('admin_menu/about_edit/'). $about['id'];?>" method="POST">
		  
		  <input type="hidden" name="id" id="id" value="<?= $about['id'];?>"></input>
		  
		   <div class="modal-body">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="motto" name="motto"  value="<?= $about['motto'];?>"required>
		<?= form_error('motto','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<textarea class="form-control" id="detail_bio" name="detail_bio" cols="30"
		rows="10" value="<?= $about['detail_bio'];?>"required> </textarea>
		<?= form_error('detail_bio','<span class="text-danger ml-3">','</span>',);?>
		</div>	
	
        <div class="modal-footer">
        
          <button type=" submit" class="btn btn-primary">Ubah</button>
        </div>
		</form>
      </div>
    </div>
	</div>