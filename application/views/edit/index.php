<?php $this->load->view("head/index.php") ?>
<?php $this->load->view("navbar/index.php") ?>

    <div class="class container">
    <?php foreach($user1 as $edit) { ?>
  <form action="<?php echo site_url('sistem/update')?>" method="POST" enctype="multipart/form-data">
  <div class="row">
      <div class="col-25">
        <label for="fname">Id Order</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="id" readonly value="<?php echo $edit->id_order ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Nama Menu</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="nama_menu"   value="<?php echo $edit->nama_menu ?>">
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
      <input type="submit" value="Submit">
    </div>
  </form>
  <?php } ?>
</div>


	<?php $this->load->view("footer/index.php") ?>
