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
              <h6 class="m-0 font-weight-bold text-primary">About</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                       <th>No</th>
                      <th>Motto</th>
                      <th>Detail Bio</th>
					          <th width="15%">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <p hidden> <?= $nomor = 1; ?> </p>
			<?php foreach ($about as $ab):?>
                    <tr>
                    <th scope="row"><?= $nomor ++; ?> </th>
                      <td><?= $ab ['motto'];?></td>
                      <td><?= $ab ['detail_bio'];?></td>
					  <td>
                      <a class="btn btn-primary btn-sm mb-1" href="<?= base_url('admin_menu/about_edit/') . $ab['id']; ?>">Edit </a>
                      <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');" href="<?= base_url('admin_menu/hapus_about/') . $ab['id']; ?>">Hapus </a>
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
		
		<form action="<?= base_url('admin_menu/about/');?>" 
		method="POST" enctype="multipart/form-data">
		
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="motto" name="motto"  placeholder="Motto"required>
		 <?= form_error('Motto','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class=" form-group mb-3">
				<textarea class="form-control" id="detail_bio" name="detail_bio" cols="30"
		rows="10" placeholder="Text"required> </textarea>

		 <?= form_error('text','<span class="text-danger ml-3">','</span>',);?>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Tambah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
