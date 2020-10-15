<?php $this->load->view("head/index.php") ?>


	<?php $this->load->view("navbar/index.php") ?>
	<?php $this->load->view("carousel/index.php") ?>

		<div class="row row-cols-1 row-cols-md-3">

		<?php 
		 if($c_user>0)
		foreach ( $user as $datas) : ?>

			<div class="col mb-4">
				<div class="card text-white bg-dark">
					<img src="<?php echo base_url('assets/images/').$datas->gambar ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo $datas->nama; ?></h5>
						<p class="card-text"><?php echo $datas->desc; ?></p><hr class="new1 mb-5">
						<h5 class="card-title">Jumlah</h5>
						<p class="card-text"><?php echo $datas->jumlah; ?></p><hr class="new1 mb-5">
						<h5 class="card-title">Harga</h5>
						<p class="card-text"><?php echo $datas->harga; ?></p><hr class="new1 mb-5">
						<?php echo anchor('sistem/edit/'.$datas->id,'<button type="button" class="btn btn-outline-light" data-toggle="modal"
							data-target="#exampleModal">Order</button>') ?>   
						
					</div>
				</div>
			</div>

			<?php endforeach; ?>

		</div>


	</div>

	<?php $this->load->view("modal/index.php") ?>
	<?php $this->load->view("modal/index1.php") ?>
	<?php $this->load->view("modal/index2.php") ?>
	<?php $this->load->view("footer/index.php") ?>
