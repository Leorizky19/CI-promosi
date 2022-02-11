 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-building"></i>
        </div>
        <div class="sidebar-brand-text mx-3">E-treding</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">
	  
	  
	<!-- Heading -->
      <div class="sidebar-heading">
        Administrator
      </div>

      <!-- Nav Item - Dashboard -->
      
	 <li class="nav-item <?= $this->uri->segment(1) == "admin" ? "active": "";?>">
	
        <a class="nav-link" href="<?= base_url('admin')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
	<li class="nav-item <?= $this->uri->segment(1) == "admin_menu" && $this->uri->segment(2) == "" ? "active": "";?>">
        <a class="nav-link" href="<?= base_url('admin_menu')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Menu Management</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
	  
	  <!-- Heading -->
      <div class="sidebar-heading">
        Menu Management
      </div>

<!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Menu</span>
        </a>

        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">All Menu</h6>
			
			<?php 
      
      $url = $this->uri->segment(1)."/".$this->uri->segment(2);
      foreach ($admin_menu as $am):?>
      
			 <a class="collapse-item <?= $url == $am['url'] ? "active": "";?>" href="<?= base_url().$am ['url']; ?>"  >
          <i class="<?= $am ['icon']; ?>"></i>
          <span><?= $am ['nama']; ?></span></a>
			 <?php endforeach;?>
          </div>
        </div>
      </li>

	  
	    <!-- Divider -->
      <hr class="sidebar-divider">
	  <!-- Heading -->
      <div class="sidebar-heading">
        User
      </div>
     
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-user-circle"></i>
          <span>Profil</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/keluar');?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <div class="sidebar-heading">
        Website
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('home');?>">
          <i class="fab fa-fw fa-chrome"></i>
          <span>Kunjungi Website</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->