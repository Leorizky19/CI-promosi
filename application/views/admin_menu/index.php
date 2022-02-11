
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Menu Management</h1>
		  
			<?= $this->session->flashdata('pesan');?>
		  
		  <a href="" class="btn btn-dark btn-sm mb-3" data-toggle="modal" data-target="#tambahmenuModal"> Tambah Menu</a>	
		  
		  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Icon</th>
      <th scope="col">Url</th>
	  <th scope="col">Aksi</th>
    </tr>
    </tr>
  </thead>
  <tbody>
 <p hidden> <?= $nomor = 1; ?> </p>
  <?php foreach ($admin_menu as $am):?>
    <tr>
      <th scope="row"><?= $nomor ++; ?> </th>
      <td><?= $am ['nama']; ?></td>
      <td><?= $am ['icon']; ?></td>
      <td><?= $am ['url']; ?></td>
	  <td> 
	  <a class="btn btn-warning btn-sm" href="<?= base_url('admin_menu/edit/') . $am['id']; ?>">Edit </a>
	  <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');" href="<?= base_url('admin_menu/hapus/') . $am['id']; ?>">Hapus <a/> 
	  </td>
    </tr>
	 <?php endforeach;?>
  </tbody>
</table>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
 <!-- Logout Modal-->
  <div class="modal fade" id="tambahmenuModal" tabindex="-1" role="dialog" aria-labelledby="tambahmenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahmenuModalLabel">Tambah Menu</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
		<form action="<?= base_url('admin_menu/tambah');?>" method="POST">
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="nama" name="nama"  placeholder="Nama Menu" required>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="icon" name="icon"  placeholder="Icon" required>
		</div>
		<div class="form-group  mb-3">
		<input type="text" class="form-control" id="url" name="url"  placeholder="Url" required>
		</div>
		</div>	
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Tambah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
    