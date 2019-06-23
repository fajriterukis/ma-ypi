<div class="row">
	<div class="col-md-12">
		<h3 class="text-center mb-4">Pengumuman Terbaru</h3>

		<ul class="list-group list-group-flush">
		  <li class="list-group-item"><a href="#">Libur Lebaran</a></li>
		  <li class="list-group-item"><a href="#">Libur Semester</a></li>
		  <p class="text-center mt-3"><a href="">Lihat Semua</a></p>
		</ul>
	</div>
</div>

<div class="row mt-4">
	<div class="col-md-12">
		<h3 class="text-center mb-3">Berita Terbaru</h3>

		<ul class="list-group list-group-flush">
			<?php foreach( $berita as $berita ) : ?>
			<li class="list-group-item">
				<img src="<?= base_url('assets/img/berita/'.$berita['foto']); ?>" width="100" class="float-left mr-3 mt-2">
				<div><?= word_limiter($berita['judul'], 5); ?></div>
				<a href="<?= base_url('berita/read/'.$berita['id'].'/'.$berita['slug']); ?>"> Baca Selengkapnya</a>
			</li>
			<?php endforeach; ?>
			<p class="text-center mt-3"><a href="<?= base_url('berita'); ?>">Lihat Semua</a></p>
		</ul>
	</div>
</div>