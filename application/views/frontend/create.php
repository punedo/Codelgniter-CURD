
<div class="container pt-5">
	<div class="row">
		<div class="card">
			<div class="card-header">
				Ci
				<a href="<?php echo base_url('emp');?>" class="btn btn-primary  float-end"  >Return</a>
			</div>
			<div class="card-body">

				<form method="post" action="<?php echo base_url('EmpController/store');?>">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">First</label>
						<input type="text"  name="first" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                         <small class="text-danger">
							 <?php  echo form_error('first');?>
						 </small>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Last</label>
						<input type="text"  name="last" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<small class="text-danger">
						<?php  echo form_error('last');?>
						</small>
					</div>

					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Phone</label>
						<input type="number"  name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>

			</div>
		</div>

	</div>
</div>

