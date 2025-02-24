  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<!-- Content Header (Page header) -->
  	<div class="content-header">
  		<div class="container-fluid">
  			<div class="row mb-2">
				<div class="col-sm-4">
					<a href="<?= base_url('dashboard/berita');?>" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
				</div>
  				<div class="col-sm-4 text-center">
  					<h1 class="m-0"><b><?= $title?></b></h1>
  				</div><!-- /.col -->
  				<div class="col-sm-4">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?= base_url('dashboard')?>">Dashboard</a></li>
  						<li class="breadcrumb-item"><a href="<?= base_url('dashboard/berita')?>">Daftar Berita</a></li>
  						<li class="breadcrumb-item active">Tambah Berita	</li>
  					</ol>
  				</div><!-- /.col -->
  			</div><!-- /.row -->
  		</div><!-- /.container-fluid -->
  	</div>
  	<!-- /.content-header -->

  	<!-- Main content -->
	  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <form class="card card-outline card-info" action="<?= base_url('dashboard/simpan_berita') ?>" enctype="multipart/form-data" method="post">
		  <div class="card-body">
			<label for="judulBerita">Judul Berita</label>
			<input type="text" class="form-control" id="judul_berita" placeholder="Masukan Judul Berita..." name="judul_berita">
			
			<div class="row pt-2">
				<div class="col-md-6">
					<label for="tanggalBerita">Tanggal Berita</label>
					<input type="date" class="form-control" id="tanggal_berita" placeholder="Masukan Tanggal Berita..." name="tanggal_berita">
				</div>
				<div class="col-md-6">
					<label for="slug">Slug</label>
					<input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
				</div>
			</div>

			<div class="row pt-2">
				<div class="col-md-3">
					<label for="image" class="form-label">Upload Gambar</label>
					<input alt="" class="form-control" type="file" accept=".png, .jpg, .jpeg" id="img_berita" name="img_berita">
				</div>
				<div class="col-md-3">
					<label for="image" class="form-label">Preview Gambar</label><br>
					<img id="preview_img" alt="Your Image" src="#">
				</div>
				<div class="col-md-6">
					<label for="kategoriBerita">Kategori Berita</label>
					<select class="form-control" id="kategoriBerita" name="id_kategori">
						<option value="">--Pilih Kategori Berita--</option>
						<?php foreach ($data_kategori as $dk) : ?>
						<option name="id_kategori" value="<?= $dk['id_kategori']; ?>"><?= $dk['nama_kategori']; ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			
		</div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- <textarea id="summernote"></textarea> -->
			  <textarea id="isiBerita" name="isi" placeholder="Ketik berita disini..."></textarea>
            </div>
			<div class="card-body">
			<div class="col-6">
					<label for="radio">Publikasi Artikel</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status" id="radio_simpan" value="Simpan">
						<label class="form-check-label" for="radio_simpan">
							Simpan
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="status" id="radio_publikasi" value="Publikasi" checked>
						<label class="form-check-label" for="radio_publikasi">
							Publikasi
						</label>
					</div>
				</div>
				<div class="float-right">
					<button type="sumbit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
				</div>
			</div>
          </form>
        </div>
        <!-- /.col-->
      </div>
    </section>
  	<!-- /.content -->
  </div>
