 <!-- Begin Page Content -->
 <div class="container-fluid">
	<div class="col-8">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit </h1>
		  
		  <form action="<?= base_url('admin_menu/contact_edit/'). $contact['id'];?>" method="POST" enctype="multipart/form-data">
		  
		  <input type="hidden" name="id" id="id" value="<?= $contact['id'];?>"></input>
		  
		   <div class="modal-body">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="hd" name="hd"  value="<?= $contact['hd'];?>"required>
		<?= form_error('header','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="text1" name="text1" value="<?= $contact['text1'];?>" required>
		 <?= form_error('text1','<span class="text-danger ml-3">','</span>',);?>
		</div>
       
        <div class="modal-footer">
        
          <button type=" submit" class="btn btn-primary">Ubah</button>
        </div>
		</form>
      </div>
    </div>
	</div>