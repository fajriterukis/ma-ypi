<div class="container konten my-3">
	<div class="row">
		<div class="col-md-8">
			<h1 class="mb-3"><?= $sejarah['judul']; ?></h1>

			<div>
				<?= $sejarah['isi']; ?>
			</div>
		</div>

		<!-- sidebar -->
		<div class="col-md-4 mt-4">
			<?php sidebar(); ?>
		</div>
		<!-- /sidebar -->

	</div>
</div>