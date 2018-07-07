<?php $this->load->view('header') ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Tambah Users
					</h1>
					<?php echo validation_errors(); ?>
					<?php echo form_open(''); ?>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Level</label>
						<select name="level" class="form-control">
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" value="Tambah">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer') ?>