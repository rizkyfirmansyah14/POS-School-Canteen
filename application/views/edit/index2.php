<?php $this->load->view("head/index.php") ?>
<?php $this->load->view("navbar/index.php") ?>

    <div class="class container">
    <?php foreach($user as $edit) { ?>
  <form action="<?php echo site_url('sistem/update_p')?>" method="POST" enctype="multipart/form-data">
  <div class="row">
      <div class="col-25">
        <label for="fname">Id Order</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="id" readonly value="<?php echo $edit->id ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Nama Menu</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="nama_menu"     value="<?php echo $edit->nama ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Deskripsi</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="desc"   value="<?php echo $edit->desc ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Jenis</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="jenis"   value="<?php echo $edit->jenis ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Harga</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="harga"   value="<?php echo $edit->harga ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Jumlah</label>
      </div>
      <div class="col-75">
      <input type="text" id="fname" name="jumlah"  value="<?php echo $edit->jumlah ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Gambar</label>
      </div>
      <div class="col-75">
      <input type="text" id="fname" name="gambar"  value="<?php echo $edit->gambar ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
  <?php } ?>
</div>


	<?php $this->load->view("footer/index.php") ?>
