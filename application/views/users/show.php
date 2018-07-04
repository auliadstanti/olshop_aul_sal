<?php $this->load->view('header') ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Table Users
					</h1>
					<a href="<?php echo base_url('Users/create') ?>" class="btn btn-primary">Tambah</a>

					<table class="table table-bordered table-hover table-inverse mt-3">
						<thead>
							<tr>
								<th>No</th>
								<th>username</th>
								<th>password</th>
								<th>level</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($users_list as $value): ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $value['username'] ?></td>
									<td><?php echo $value['password'] ?></td>
									<td><?php echo $value['level'] ?></td>
									<td>
										<a href="<?php echo base_url('Users/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Users/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer') ?>