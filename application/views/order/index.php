<?php $this->load->view("head/index.php") ?>
<?php $this->load->view("navbar/index.php") ?>

    <div class="class container">
    <?php foreach($user as $edit) { ?>
  <form action="<?php echo site_url('sistem/simpan')?>" method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nama Menu</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="nama"  readonly value="<?php echo $edit->nama ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Harga</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="harga" readonly value="<?php echo $edit->harga ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Jenis</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="jenis" readonly value="<?php echo $edit->jenis ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Jumlah</label>
      </div>
      <div class="col-75">
        <input type="number" id="lname" name="jumlah" placeholder="Masukan Jumlah">
      </div>
    </div>
    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
  <?php } ?>
</div>


	<?php $this->load->view("footer/index.php") ?>
