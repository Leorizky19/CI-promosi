<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1>
		
		  
		  <!-- Tampil data -->
		  <!-- Basic Card Example -->
           
		</div>
 
        <!-- /.container-fluid -->
       
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
					   <th>Nama</th>
                      <th>Email</th>
                      <th>Telepon</th>
                      <th>Subjek</th>
					  <th>Pesan</th>
					   <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
				 <p hidden> <?= $nomor = 1; ?> </p>
			<?php foreach ($contact_us as $cus):?>
                    <tr>
					<th scope="row"><?= $nomor ++; ?> </th>
                      <td><?= $cus ['nama'];?></td>
                      <td><?= $cus ['email'];?></td>
                      <td><?= $cus ['telpon'];?></td>
                      <td><?= $cus ['subjek'];?></td>
                      <td><?= $cus ['pesan'];?></td>
					  
                      <td>
                      
					  <a class="btn btn-danger btn-sm mb-1" onclick="return confirm('Apakah anda yakin data ini ingin dihapus?');"
					  href="<?= base_url('admin_menu/hapus_contact_us/') . $cus['id']; ?>" ">Hapus</a>
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