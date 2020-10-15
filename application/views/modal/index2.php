	<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">List Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Pesanan</th>
      <th scope="col">Nomor Meja</th>
      <th scope="col">Total Harga</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php
    $i=1;
    $k=1;
    $j='P00';
    $k='1';
  if($c_user2>0)
    foreach ( $user2 as $datas) : ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $i++ ?></th>
      <td><?php echo $j, $k++ ?></td>
      <td><?php echo $datas->no_m; ?></td>
      <td><?php echo $datas->tot_har; ?></td>
      <td><?php echo $datas->date;  ?></td>
      <td><?php  echo $datas->status; ?></td>
    </tr>
  </tbody>
  <?php endforeach; ?>
</table>

      </div>
      <div class="modal-footer">
      <a href="<?php echo site_url('sistem/export')?>"><button type="button" class="btn btn-outline-success">Cetak Report Laporan</button></a>
					</div>
      </div>
    </div>
  </div>
</div>