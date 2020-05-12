<div class="container">
	<div class="row" style="margin-top: 8%;">
		<div class="col l4 m4">
		</div>
		<div class="col l4 m4" style="background-color: orange; padding: 10px;">
			<h5 class="white-text">Admin Login</h5>
			<?php  if($msg = $this->session->flashdata('msg')) : ?>
			<div class="red-text">
				<?= $msg; ?>
			</div>
			<?php endif; ?>
			<?= form_open('Admin/Login'); ?>
			<input type="text" name="user_name" placeholder="User Name" required>
			<input type="password" name="password" placeholder="password" required>
			
			<br>
			<button style="submit" class="btn">Login</button>
			<?= form_open(); ?>
		</div>
		<div class="col l4 m4">
		</div>
	</div>
</div>