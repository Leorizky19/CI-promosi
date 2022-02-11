 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
		  
		  <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahfiturModal"> Tambah Fitur</a>
		  
		  <?= $this->session->flashdata('pesan');?>
		  
		  
		  <!-- Tampil data -->
		  
	 <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Text</th>
      <th scope="col">Image</th>
	  <th scope="col" width="15%">Aksi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
 <p hidden> <?= $nomor = 1; ?> </p>
  <?php foreach ($fitur as $fi):?>
    <tr>
  <th scope="row"><?= $nomor ++; ?> </th>
      <td><?= $fi ['judul']; ?></td>
      <td><?= $fi ['text']; ?></td>
      <td>
	  <img src="<?= base_url('front-end/assets/img/fitur-img/') . $fi ['image']?>" class="img-thumbnail" alt="" width="100">
	  </td>
	
	  <td>
    <a class="btn btn-primary btn-sm mb-1" href="<?= base_url('admin_menu/fitur_edit/') .$fi ['id'];?>">Edit </a>
	    <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');"
		href="<?= base_url('admin_menu/hapus_fitur/') . $fi['id']; ?>">Hapus <a/> 
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
  <div class="modal fade" id="tambahfiturModal" tabindex="-1" role="dialog" aria-labelledby="tambahbannerfitur
  Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahfiturModalLabel">Tambah Fitur</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
		<form action="<?= base_url('admin_menu/fitur');?>" 
		method="POST" enctype="multipart/form-data">
		
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="judul" name="judul"  placeholder="Judul"required>
		 <?= form_error('judul','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group  mb-3">
		<textarea class="form-control" id="text" name="text" cols="30"
		rows="10" placeholder="Text"required> </textarea>
		 <?= form_error('text','<span class="text-danger ml-3">','</span>',);?>
		</div>	
		<div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" placeholder="Image"required>
		<label for="image" class="custom-file-label">Gambar</label>
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
