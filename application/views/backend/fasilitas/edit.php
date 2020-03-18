<section class="content-header">
	<h1>Manajemen Profil</h1>
</section>

<section class="content">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header">
					<h4 class="pull-left">Edit Sarana dan Prasranan</h4>
					<a href="<?= base_url('administrator/fasilitas'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 10px;">
						<i class="fa fa-chevron-left"></i> Kembali
					</a>
				</div>
				<div class="box-body">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control" value="<?= $fasilitas['judul']; ?>">
							<?= form_error('judul'); ?>
						</div>
						<div class="form-group">
							<label>Isi</label>
							<textarea name="isi" id="editor" class="form-control"><?= $fasilitas['isi']; ?></textarea>
							<?= form_error('isi'); ?>
						</div>
						<div class="form-group">
							<img src="<?= base_url('assets/img/fasilitas/'.$fasilitas['foto']); ?>" width="200">
							<input type="file" name="foto" class="form-control">
						</div>
						<button type="submit" class="btn btn-success" style="margin-bottom: 15px;">
							<i class="fa fa-download"></i> Simpan
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>