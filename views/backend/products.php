			<h1><?=$title;?></h1>

			<!-- Table (TABLE) -->
			<br />
			<?php
			   echo anchor(site_url('backend/products/form/insert/'),'Add',' class="input-submit"');	
			?>
			<br />
			<table>
				<tr>
					<th>No</th>
					<th>Actions</th>					    
				    <th>Products Name</th>
				    <th>Supplier ID</th>
					<th>Category ID</th>
					<th>QuantityPerUnit</th>
					<th>UnitPrice</th>
					<th>UnitsInStock</th>
					<th>UnitsOnOrder</th>
					<th>ReorderLevel</th>
					<th>Discontinued</th>
					
				</tr>
				<?php
					//$no=0;
					foreach($array_product as $row):	
					$id=$row->ProductID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=$no;?>.</td>
				    <td><?=anchor(site_url('backend/products/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('backend/products/form/update/'.$id),'[update]');?></td>				    
				    <td><?=$row->ProductName;?></td>
				    <td><?=$row->SupplierID;?></td>
					<td><?=$row->CategoryID;?></td>
					<td><?=$row->QuantityPerUnit;?></td>
					<td><?=$row->UnitPrice;?></td>
					<td><?=$row->UnitsInStock;?></td>
					<td><?=$row->UnitsOnOrder;?></td>
					<td><?=$row->ReorderLevel;?></td>
					<td><?=$row->Discontinued;?></td>
										
				</tr>
								<?php  endforeach; ?>
				</table>
				<!--Menampilkan Paging-->
				<div class="halaman">Halaman : <?php echo $halaman;?></div>
		