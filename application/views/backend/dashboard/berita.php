  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0"><?= $title?></h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
  						<li class="breadcrumb-item active"><?= $title?></li>
  					</ol>
  				</div><!-- /.col -->
  			</div><!-- /.row -->
  		</div><!-- /.container-fluid -->
  	</div>
  	<!-- /.content-header -->

  	<!-- Main content -->
  	<section class="content">
      <div class="container-fluid">
			<?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>
      <?= $this->session->flashdata('message');  ?>
	     <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
			  	<a class="btn btn-primary float-right" href="<?= base_url('berita/tambah_berita')?>"><i class="fas fa-fw fa-plus"></i> Tambah Berita</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Ringkasan</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
					<?php $no = 1; ?>
					<?php foreach ($data_berita as $db) : ?>
                  <tr>
					<td scope="row"><?= $no; ?></td>
                    <td><?= $db['judul_berita']; ?></td>
                    <td><?= $db['isi']; ?></td>
                    <td><?= $db['tanggal']; ?></td>
                    <td><?= $db['status']; ?></td>
                    <td>
                      <button type="button" class="btn btn-warning input-block-level" data-toggle="modal" data-target="#editDataDosenModal"><i class="fas fa-fw fa-edit"></i> Edit</button>
                      <button type="button" class="btn btn-danger input-block-level" data-toggle="modal" data-target="#deleteDataDosenModal"><i class="fas fa-fw fa-trash"></i> Hapus</button>
                    </td>
                  </tr>
					<?php $no++; ?>
                	<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  	<!-- /.content -->
  </div>
