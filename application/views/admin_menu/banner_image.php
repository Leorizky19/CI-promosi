 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
		  
		  <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahbannerModal"> Tambah Banner</a>
		  
		  <?= $this->session->flashdata('pesan');?>
		  
		  <!-- Tampil data -->
		  
	 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" width="30%">Text Bio</th>
      <th scope="col">Text Kecil</th>
      <th scope="col">Image</th>
	  <th scope="col" width="15%">Aksi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
 <p hidden> <?= $nomor = 1; ?> </p>
  <?php foreach ($banner_image as $bi):?>
    <tr>
  <th scope="row"><?= $nomor ++; ?> </th>
      <td><?= $bi ['text']; ?></td>
      <td><?= $bi ['texts']; ?></td>
      <td>
	  <img src="<?= base_url('front-end/assets/img/banner/') . $bi ['image']?>" class="img-thumbnail" alt="" width="100">
	  </td>
	
	  <td>
    <a class="btn btn-primary btn-sm mb-1" href="<?= base_url('admin_menu/banner_image_edit/') .$bi ['id'];?>">Edit </a>
	    <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');"
		href="<?= base_url('admin_menu/hapus_banner/') . $bi['id']; ?>">Hapus <a/> 
	  </td> 
    </tr>
	</tr>
	 <?php endforeach;?>
  </tbody>
</table>
  </div>
        <!-- /.container-fluid -->

       </div>
	   
	     <!-- Logout Modal-->
  <div class="modal fade" id="tambahbannerModal" tabindex="-1" role="dialog" aria-labelledby="tambahbannerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahbannerModalLabel">Tambah Banner</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
		<form action="<?= base_url('admin_menu/banner_image');?>"	method="POST" enctype="multipart/form-data">
		
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="text" name="text"  placeholder="Text Bio"required>
		 <?= form_error('text','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="texts" name="texts"  placeholder="Text Kecil"required>
		 <?= form_error('texts','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" placeholder="Image"required>
		<label for="image" class="custom-file-label"></label>
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
