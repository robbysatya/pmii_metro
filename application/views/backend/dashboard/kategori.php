  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0">Daftar Kategori</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Dashboard</a></li>
  						<li class="breadcrumb-item active">Daftar Kategori</li>
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
			  	<button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahKategori"><i class="fas fa-fw fa-plus"></i> Tambah Data</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
									<?php $no = 1; ?>
									<?php foreach ($data_kategori as $dk) : ?>
                  <tr>
                    <td><?= $dk['id_kategori']; ?></td>
                    <td><?= $dk['nama_kategori']; ?></td>
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

   <!-- Modal Fitur -->

    <!-- Modal Tambah Data  -->
    <div class="modal fade" id="tambahKategori" tabindex="-1" aria-labelledby="newDataDosenLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newDataDosenLabel">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('data_kategori/simpan') ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <div class="mb-3">
                  <input type="number" class="form-control" id="id_kategori" name="id_kategori" placeholder="Id Kategori" value="" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" required>
                </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-times"></i>
                Close</button>
              <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-save"></i> Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
