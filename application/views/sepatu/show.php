<?php $this->load->view('header') ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css">
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Table Sepatu
					</h1>
					<a href="<?php echo base_url('Sepatu/create') ?>" class="btn btn-primary">Tambah</a>

					<table class="table table-bordered table-hover table-inverse mt-3" id="myTable">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Merk</th>
								<th>Kategori</th>
								<th>Warna</th>
								<th>Ukuran tersedia</th>
								<th>Stok</th>
								<th>Harga</th>
								<th>Gambar</th>
								<th>aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; ?>
							<?php foreach ($sepatu_list as $value): ?>
								<tr>
									<td><?php echo $no++; ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['merk'] ?></td>
									<td><?php echo $value['kategori'] ?></td>
									<td><?php echo $value['warna'] ?></td>
									<td><?php echo $value['ukuran_tersedia'] ?></td>
									<td><?php echo $value['stok'] ?></td>
									<td><?php echo $value['harga'] ?></td>
									<td><img src="<?php echo base_url('assets/uploads/').$value['gambar'] ?>" alt="" width="100px"></td>
									<td>
										<a href="<?php echo base_url('Sepatu/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Sepatu/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
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
<script src="//cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>