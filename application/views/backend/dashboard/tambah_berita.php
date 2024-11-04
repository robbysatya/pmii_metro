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
          <form class="card card-outline card-info">
		  <div class="card-body">
			<label for="judulBerita">Judul Berita</label>
			<input type="text" class="form-control" id="judulBerita" placeholder="Masukan Judul Berita...">
			
			<div class="row pt-2">
				<div class="col-6">
					<label for="tanggalBerita">Tanggal Berita</label>
					<input type="date" class="form-control" id="tanggalBerita" placeholder="Masukan Tanggal Berita...">
				</div>
				<div class="col-6">
						<label for="kategoriBerita">Kategori Berita</label>
							<select class="kategoriBerita form-control" name="states[]" multiple="multiple">
									<option value="AL">Alabama</option>
									<option value="AL">Alabama</option>
									<option value="AL">Alabama</option>
									<option value="WY">Wyoming</option>
									<option value="WY">Wyoming</option>
									<option value="WY">Wyoming</option>
									<option value="WY">Wyoming</option>
							</select>
				</div>
			</div>
		 </div>
            <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote"></textarea>
            </div>
			<div class="card-body">
			<div class="col-6">
					<label for="kategoriBerita">Publikasi Artikel</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="radioSimpan" id="radioSimpan">
						<label class="form-check-label" for="radioSimpan">
							Simpan
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="radioPublikasi" id="radioPublikasi" checked>
						<label class="form-check-label" for="radioPublikasi">
							Publikasi
						</label>
					</div>
				</div>
				<div class="float-right">
					<button type="button" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
				</div>
			</div>
          </form>
        </div>
        <!-- /.col-->
      </div>
    </section>
  	<!-- /.content -->
  </div>
