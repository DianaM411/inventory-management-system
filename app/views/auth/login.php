<div class="row">
<?php $this->load->view('alert') ?>
	<div class="col-md-3"></div>

	<div class="col-md-6">
	
		<form action="<?=site_url('authentication') ?>" method="POST" role="form">
			<legend class="text-center">Login Panel</legend>
		
			<div class="form-group">
				<label for="">Email :</label>
				<input type="email" class="form-control" id="" placeholder="" name="email">
			</div>

			<div class="form-group">
				<label for="">Password :</label>
				<input type="password" class="form-control" id="" name="password">
			</div>

			<button type="submit" class="btn btn-success" style="border-radius:0%;">Login</button>
		</form>

	
	</div>

	<div class="col-md-3"></div>
</div>