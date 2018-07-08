<?php $this->load->view('header') ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Table Transaksi
					</h1>

					<table class="table table-bordered table-hover table-inverse mt-3">
						<thead>
							<tr>
								<th>No</th>
								<th>Nomor</th>
								<th>Tanggal</th>
								<th>Username</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($list_transaksi as $value): ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $value['nomor'] ?></td>
									<td><?php echo $value['tanggal'] ?></td>
									<td><?php echo $value['username'] ?></td>
									<?php if ($value['status'] == 1): ?>
										<td><span class="badge badge-primary">Belum Dikirim</span></td>
										<?php else: ?>
											<td><span class="badge badge-success">Sudah Dikirim</span></td>
									<?php endif ?>
									<td>
										<a href="<?php echo base_url('Transaksi/detail/'.$value['id']) ?>" class="btn btn-sm btn-success">Detail</a>
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