<?php $this->load->view("head/index.php") ?>
<?php $this->load->view("navbar/index.php") ?>

    <div class="class container">
  <form action="<?php echo site_url('sistem/simpanp')?>" method="POST" enctype="multipart/form-data">
  <div class="row">
      <div class="col-25">
        <label for="fname">Id Order</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="id" readonly >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Nama Menu</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="nama_menu" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Deskripsi</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="desc"  >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Jenis</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="jenis"  >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Harga</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="harga" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Jumlah</label>
      </div>
      <div class="col-75">
      <input type="text" id="fname" name="jumlah" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Gambar</label>
      </div>
      <div class="col-75">
      <input type="text" id="fname" name="gambar" >
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>


	<?php $this->load->view("footer/index.php") ?>
