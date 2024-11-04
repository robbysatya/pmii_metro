  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
  				<div class="col-sm-6">
  					<h1 class="m-0">Daftar Alumni</h1>
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Home</a></li>
  						<li class="breadcrumb-item active">Daftar Almuni</li>
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
			  	<button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahAlumni"><i class="fas fa-fw fa-plus"></i> Tambah Data</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Periode</th>
                    <!-- <th>Foto</th> -->
                    <!-- <th>Aksi</th> -->
                  </tr>
                  </thead>
                  <tbody>
					<?php $no = 1; ?>
					<?php foreach ($data_alumni as $da) : ?>
                  <tr>
					<td scope="row"><?= $no; ?></td>
                    <td><?= $da['nama']; ?></td>
                    <td><?= $da['alamat']; ?></td>
                    <td><?= $da['periode']; ?></td>
                    <!-- <td>
                      <button type="button" class="btn btn-warning input-block-level" data-toggle="modal" data-target="#editDataDosenModal"><i class="fas fa-fw fa-edit"></i> Edit</button>
                      <button type="button" class="btn btn-danger input-block-level" data-toggle="modal" data-target="#deleteDataDosenModal"><i class="fas fa-fw fa-trash"></i> Hapus</button>
                    </td> -->
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
    <div class="modal fade" id="tambahAlumni" tabindex="-1" aria-labelledby="newDataDosenLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newDataDosenLabel">Tambah Data Alumni</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url('data_alumni/simpan') ?>" method="post">
            <div class="modal-body">
              <div class="form-group">
                <div class="mb-3">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" id="periode" name="periode" placeholder="Periode" required>
                </div>
                <div class="mb-3">
								<!-- <label class="col-form-label">Foto Anggota</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file_draft" name="file_draft" accept="image/png, image/jpeg, image/jpg">
                  <label class="custom-file-label">Choose file</label>
                </div> -->
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
