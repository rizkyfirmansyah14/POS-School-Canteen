    <?php $this->load->view("head/index.php") ?>
	<?php $this->load->view("navbar/index1.php") ?>
    
	<h1 style="margin-top: 8%; margin-bottom: 3%; text-align: center;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="text-dark">Daftar Menu</h1>

	<a href="<?php echo site_url('sistem/insert');?>"><button type="button" style="margin-bottom: 3%; margin-left: 45%" class="btn btn-success">Tambah Menu</button></a>
	
	<div class="container-fluid">
	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Menu</th>
      <th scope="col">Desc</th>
	  <th scope="col">Jenis</th>
	  <th scope="col">Harga</th>
	  <th scope="col">Jumlah</th>
	  <th scope="col">Gambar</th>
	  <th class="text-center" span="2" scope="col">Action</th>
    </tr>
  </thead>
  <?php 
		 if($c_user>0)
		foreach ( $user as $datas) : 
		?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $datas->id; ?></th>
      <td><?php echo $datas->nama; ?></td>
      <td><?php echo $datas->desc; ?></td>
	  <td><?php echo $datas->jenis; ?></td>
	  <td><?php echo $datas->harga; ?></td>
	  <td><?php echo $datas->jumlah; ?></td>
	  <td><?php echo $datas->harga; ?></td>
	  <td class="text-center">
		<?php echo anchor('sistem/edit_p/'.$datas->id,'<button type="button" class="btn btn-success" >Edit</button>') ?>
	    <?php echo anchor('sistem/deleteData_p/'.$datas->id,'<button type="button" class="btn btn-danger">Hapus</button>') ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>
	</div>


	<?php $this->load->view("modal/index.php") ?>
	<?php $this->load->view("modal/index3.php") ?>
	<?php $this->load->view("modal/index4.php") ?>
	<?php $this->load->view("footer/index.php") ?>