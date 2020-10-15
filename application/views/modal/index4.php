	<!-- Button trigger modal -->

	<!-- Modal -->
	<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
								<th scope="col">Nama Menu</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Harga</th>
								<th scope="col">Sub Total</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<?php
                        $i=1;
                        $tot=0;
                    if($c_user1>0)
                        foreach ( $user1 as $datas) :
                        $sum = $datas->sub;
                        ?>
						<tbody>
							<tr>
								<th scope="row"><?php echo $i++ ?></th>
								<td><?php echo $datas->nama_menu; ?></td>
								<td><?php echo $datas->jumlah; ?></td>
								<td><?php echo $datas->harga; ?></td>
								<td><?php echo $sum ?></td>
								<td>
									<?php echo anchor('sistem/deleteData/'.$datas->id_order,'<button type="button" class="btn btn-danger">Hapus</button>') ?>
									<?php echo anchor('sistem/edit_menu/'.$datas->id_order,'<button type="button" class="btn btn-success">Edit</button>') ?>
								</td>
							</tr>
							<?php 
                    $tot += $datas->sub;
                    endforeach;
                    
                    ?>
							<tr>
								<td colspan="3">
									<h5 align="center">Total</h5>
								</td>
								<td>:</td>
									<td>
										<input style="  width: 50%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                box-sizing: border-box;
                                border: none;
                                border-bottom: 2px solid red;" name="tot_har" type="number" readonly value="<?php echo $tot ?>">
									</td>
							</tr>
						</tbody>
					</table>
                    <h5>Jumlah Pembayaran</h5>
					<input style="width: 27%;
                                padding: 12px 20px;
                                margin: 8px 0;
                                box-sizing: border-box;
                                border: none;
                                border-bottom: 2px solid red;" type="number" id="bayar" name="meja">
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="" onclick="bayar()" class="btn btn-outline-dark">Input</button>
				</div>
			</div>
		</div>
	</div>
    </div>
    
    <script>
        function bayar(){
		  alert("Pembayaran Berhasil")
		  
        }
    </script>
