<?php $this->load->view('header') ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Tambah Users
					</h1>
					<?php if(isset($error['error'])) echo $error['error']; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open_multipart(''); ?>
					<div class="form-group">
						<label for="">nama</label>
						<input type="text" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label for="">merk</label>
						<input type="text" name="merk" class="form-control">
					</div>
					<div class="form-group">
						<label for="">kategori</label>
						<input type="text" name="kategori" class="form-control">
					</div>
					<div class="form-group">
						<label for="">warna</label>
						<input type="text" name="warna" class="form-control">
					</div>
					<div class="form-group">
						<label for="">ukuran_tersedia</label>
						<input type="text" name="ukuran_tersedia" class="form-control">
					</div>
					<div class="form-group">
						<label for="">stok</label>
						<input type="text" name="stok" class="form-control">
					</div>
					<div class="form-group">
						<label for="">harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Gambar</label>
						<input type="file" name="gambar" class="form-control">
					</div>
					<input type="submit" class="btn btn-primary" value="Tambah">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer') ?>