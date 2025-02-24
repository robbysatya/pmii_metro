  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
  	<!-- Brand Logo -->
  	<a href="index3.html" class="brand-link">
  		<img src="<?= base_url('assets/'); ?>images/logo_pmii.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
  		<span class="brand-text font-weight-light">PMII Kota Metro</span>
  	</a>

  	<!-- Sidebar -->
  	<div class="sidebar">
  		<!-- Sidebar user panel (optional) -->
  		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
  			<div class="image">
  				<img src="<?= base_url('assets/'); ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
  			</div>
  			<div class="info">
  				<a href="#" class="d-block"><?= $userdata; ?></a>
  			</div>
  		</div>

  		<!-- SidebarSearch Form -->
  		<div class="form-inline">
  			<div class="input-group" data-widget="sidebar-search">
  				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
  				<div class="input-group-append">
  					<button class="btn btn-sidebar">
  						<i class="fas fa-search fa-fw"></i>
  					</button>
  				</div>
  			</div>
  		</div>

  		<!-- Sidebar Menu -->
  		<nav class="mt-2">
  			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  				<li class="nav-item">
  					<a href="<?= base_url('dashboard'); ?>" class="nav-link">
  						<i class="nav-icon fas fa-tachometer-alt"></i>
  						<p>
  							Dashboard
  							<i class="right fas fa-angle"></i>
  						</p>
  					</a>
  				</li>
  				<li class="navbar navbar-dark bg-dark">Data Anggota</li>
  				<li class="nav-item">
  					<a href="<?= base_url('dashboard/anggota'); ?>" class="nav-link">
  						<i class="nav-icon fas fa-user"></i>
  						<p>
  							Anggota Aktif
  						</p>
  					</a>
  				</li>

  				<li class="nav-item">
  					<a href="<?= base_url('dashboard/alumni'); ?>" class="nav-link">
  						<i class="nav-icon fas fa-user"></i>
  						<p>
  							Alumni
  						</p>
  					</a>
  				</li>

				<li class="navbar navbar-dark bg-dark">Data Berita</li>
  				<li class="nav-item">
  					<a href="<?= base_url('dashboard/berita'); ?>" class="nav-link">
  						<i class="nav-icon fas fa-newspaper"></i>
  						<p>
  							Daftar Berita
  						</p>
  					</a>
  				</li>
  				<li class="nav-item">
  					<a href="<?= base_url('dashboard/kategori'); ?>" class="nav-link">
  						<i class="nav-icon fas fa-list"></i>
  						<p>
  							Kategori
  						</p>
  					</a>
  				</li>
				
				<li class="navbar navbar-dark bg-dark">Gallery Kegiatan</li>
  				<li class="nav-item">
  					<a href="<?= base_url('dashboard/gallery'); ?>" class="nav-link">
					  	<i class="fas fa-images"></i>
  						<p>
  							Gallery kegiatan
  						</p>
  					</a>
  				</li>

				<li class="navbar navbar-dark bg-dark"><span>Data Akun</span></li>
  				<li class="nav-item">
  					<a href="#" class="nav-link">
  						<i class="nav-icon fas fa-user"></i>
  						<p>
  							User
  						</p>
  					</a>
  				</li>

				  <li class="nav-item">
  					<a href="<?= base_url('auth/logout'); ?>" class="nav-link">
					  <i class="nav-icon fas fas fa-sign-out-alt"></i>
  						<p>
  							Keluar
  						</p>
  					</a>
  				</li>
  			</ul>
  		</nav>
  		<!-- /.sidebar-menu -->
  	</div>
  	<!-- /.sidebar -->
  </aside>
