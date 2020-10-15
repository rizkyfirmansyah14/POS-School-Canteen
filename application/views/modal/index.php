<?php $this->load->view("head/index.php") ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="moda" id="exampleModalLabel">Jumlah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
  
      <form action="<?php echo site_url('sistem/simpan_menu')?>" method="POST" enctype="multipart/form-data">
      <input type="text"
      readonly value="" 
           name="jumlah"  
            class="fname" style="  
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid black;">

       <input type="text" readonly value="" name="jumlah" class="fname"  style="  
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid black;">     

        <input type="number" placeholder="Masukan Jumlah" name="jumlah" class="fname"  style="  
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-bottom: 2px solid black;">
             
         

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-dark">Input</button>
        </form>
					</div>
      </div>
    </div>
  </div>
</div>


<?php $this->load->view("footer/index.php") ?>