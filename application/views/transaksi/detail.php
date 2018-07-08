<?php $this->load->view('header') ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Table Detail Transaksi
					</h1>
					<table>
						<tr>
							<td width="100px">Nomor</td>
							<td>: </td>
							<td><?php echo $transaksi['nomor'] ?></td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>: </td>
							<td><?php echo date('Y-m-d',strtotime($transaksi['tanggal'])) ?></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>: </td>
							<td><?php echo $transaksi['status'] ?></td>
						</tr>
						<tr>
							<td>Username</td>
							<td>: </td>
							<td><?php echo $transaksi['username'] ?></td>
						</tr>
					</table>

					<table class="table table-bordered table-hover table-inverse mt-3">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kategori</th>
								<th>Warna</th>
								<th>Ukuran</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($detail as $value): ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['kategori'] ?></td>
									<td><?php echo $value['warna'] ?></td>
									<td><?php echo $value['ukuran'] ?></td>
									<td><?php echo $value['jumlah'] ?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<?php echo anchor('Transaksi', 'Back', array('class'=>'btn btn-secondary')); ?>
					<?php if ($transaksi['status'] == '1'): ?>
						<?php echo anchor('Transaksi/kirim/'.$transaksi['id'], 'Kirim', array('class'=>'btn btn-primary float-right')); ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer') ?>