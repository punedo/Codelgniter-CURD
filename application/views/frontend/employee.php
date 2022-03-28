
<div class="container pt-5">
	<div class="row">
		<div class="card">
			<div class="card-header">
				Ci
				<a href="<?php echo base_url('EmpController/add');?>" class="btn btn-primary  float-end"  >Create</a>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">First</th>
						<th scope="col">Last</th>
						<th scope="col">phone</th>
						<th scope="col">Edit</th>
						<th scope="col">Delete</th>
					</tr>
					</thead>
					<tbody>

					<?php
					$id=0;
					foreach( $emp as $row):
                     ?>


						<tr>
						<th scope="row">
							<?php echo $row->id;?>
						</th>
						<td>
							<?php echo $row->first;?>
						</td>
						<td>
							<?php echo $row->last;?>
						</td>
						<td>
							<?php echo $row->phone;?>
						</td>

						<td>
							<a href="<?php echo base_url('EmpController/edit/'. $row->id);?>" class="btn btn-warning btn-sm color-white">Edit</a>
						</td>

						<td>
							<a href="<?php echo base_url('EmpController/delete/'. $row->id);?>" class="btn btn-danger btn-sm color-white">Delete</a>
						</td>
					</tr>

						<?php

					endforeach;
					?>


					</tbody>
				</table>

			</div>
		</div>

	</div>
</div>

