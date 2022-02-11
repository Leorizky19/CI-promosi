 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
		  
		  <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahaboutdetailModal">Tambah About </a>
		  
		  <?= $this->session->flashdata('pesan');?>
		  
		  <!-- Tampil data -->
		  <!-- Basic Card Example -->
           
		</div>
 
        <!-- /.container-fluid -->
       
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data About Detail</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>Judul</th>
                      <th>Text</th>
					  <th>Image</th>
					   <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
				 
			<?php foreach ($about_detail as $abd):?>
                    <tr>
					     
                      <td><?= $abd ['judul'];?></td>
                      <td><?= $abd ['text'];?></td>
                     
                      
					  <td>
	  <img src="<?= base_url('front-end/assets/img/about-detail/') . $abd ['image']?>" class="img-thumbnail" alt="" width="100">
	  </td>
                
                      <td>
                      <a class="btn btn-primary btn-sm mb-1" href="<?= base_url('admin_menu/about_detail_edit/') .$abd['id'];?>">Edit </a>
					  <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');" href="<?= base_url('admin_menu/hapus_about_detail/') . $abd['id']; ?>" >Hapus</a>
					  </td>
                    </tr>
					<?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

      </div>
        <!-- /.container-fluid -->
	   
	     <!-- Karyawan Modal-->
  <div class="modal fade" id="tambahaboutdetailModal" tabindex="-1" role="dialog" aria-labelledby="tambahaboutdetailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahaboutdetailModalLabel">Tambah About</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
		<form action="<?= base_url('admin_menu/about_detail/');?>" 
		method="POST" enctype="multipart/form-data">
		
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="judul" name="judul"  placeholder="Judul"required>
		 <?= form_error('judul','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="text" name="text"  placeholder="Text"required>
		 <?= form_error('text','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="custom-file">
		<input type="file" class="custom-file-input" id="image" name="image" placeholder="Image"required>
		 <?= form_error('image','<span class="text-danger ml-3">','</span>',);?>
		<label for="image" class="custom-file-label">Foto</label>
		</div>	
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Tambah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
