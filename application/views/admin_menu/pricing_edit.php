 <!-- Begin Page Content -->
 <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Pricing</h1>
		  
		  <form action="<?= base_url('admin_menu/pricing_edit/'). $pricing['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $pricing['id'];?>"></input>
		  
		   <div class="modal-body">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="hd" name="hd"  value="<?= $pricing['hd'];?>"required>
		<?= form_error('header','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<textarea class="form-control" id="text1" name="text1" cols="30"
		rows="10" value="<?= $pricing['text1'];?>"required> </textarea>
		<?= form_error('text1','<span class="text-danger ml-3">','</span>',);?>
		</div>	
        <div class="form-group mb-3">
		<input type="text" class="form-control" id="link" name="link"  value="<?= $pricing['link'];?>"required>
		<?= form_error('link','<span class="text-danger ml-3">','</span>',);?>
		</div>
        <div class="modal-footer">
        
          <button type=" submit" class="btn btn-primary">Ubah</button>
        </div>
		</form>
      </div>
    </div>
	</div>