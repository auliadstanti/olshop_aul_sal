<?php $this->load->view('header') ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Update Sepatu
					</h1>
					<?php if(isset($error)) echo $error; ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open_multipart(''); ?>
					<div class="form-group">
						<label for="">nama</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $sepatu['nama'] ?>">
					</div>
					<div class="form-group">
						<label for="">merk</label>
						<input type="text" name="merk" class="form-control" value="<?php echo $sepatu['merk'] ?>">
					</div>
					<div class="form-group">
						<label for="">kategori</label>
						<select name="kategori" id="" class="form-control">
							<option>Shoes</option>
							<option>Heels</option>
							<option>Wedges</option>
							<option>Sandals</option>
							<option>Boots</option>
						</select>
						<script>$("select[name='kategori']").val("<?php echo $sepatu['kategori'] ?>")</script>
					</div>
					<div class="form-group">
						<label for="">warna</label>
						<input type="text" name="warna" class="form-control" value="<?php echo $sepatu['warna'] ?>">
					</div>
					<div class="form-group">
						<label for="">ukuran_tersedia</label>
						<input type="text" name="ukuran_tersedia" class="form-control" value="<?php echo $sepatu['ukuran_tersedia'] ?>">
					</div>
					<div class="form-group">
						<label for="">stok</label>
						<input type="text" name="stok" class="form-control" value="<?php echo $sepatu['stok'] ?>">
					</div>
					<div class="form-group">
						<label for="">harga</label>
						<input type="text" name="harga" class="form-control" value="<?php echo $sepatu['harga'] ?>">
					</div>
					<div class="form-group">
						<label for="">Gambar</label>
						<input type="file" name="gambar" class="form-control">
					</div>
					<input type="submit" class="btn btn-success" value="Update">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer') ?>