<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
		  
		  <a href="" class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#tambahcontactModal"> Tambah Tulisan</a>
		  
		  <?= $this->session->flashdata('pesan');?>
		  
		  <!-- Tampil data -->
		  
			  <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Header</th>
      <th scope="col">Text1</th>
		 <th scope="col">Aksi</th>
    </tr>
    </tr>
  </thead
  <tbody>
   <p hidden> <?= $nomor = 1; ?> </p>
  <?php foreach ($contact as $co):?>
    <tr>
     <th scope="row"><?= $nomor ++; ?> </th>
      <td><?= $co ['hd']; ?></td>
      <td><?= $co ['text1'];?></td>
	  <td>
    <a class="btn btn-primary btn-sm mb-1" href="<?= base_url('admin_menu/contact_edit/') .$co ['id'];?>">Edit </a>
	 <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');"
		href="<?= base_url('admin_menu/contact_hapus/') . $co['id']; ?>">Hapus <a/>
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
  <div class="modal fade" id="tambahcontactModal" tabindex="-1" role="dialog" aria-labelledby="tambahcontactModalModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambahcontactModalLabel">Tambah </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
		
		<form action="<?= base_url('admin_menu/contact/');?>" method="POST">
		
        <div class="modal-body">
		<div class=" form-group mb-3">
		<input type="text" class="form-control" id="hd" name="hd"  placeholder="Header"required>
		 <?= form_error('hd','<span class="text-danger ml-3">','</span>',);?>
		</div>
		<div class="form-group mb-3">
		<input type="text" class="form-control" id="text1" name="text1"  placeholder="Text1"required>
		 <?= form_error('text1','<span class="text-danger ml-3">','</span>',);?>
		</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type=" submit" class="btn btn-primary">Tambah</button>
        </div>
		</form>
      </div>
    </div>
  </div>
