<?php $this->load->view('header'); ?>
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<?php 
					echo 'Sukses Delete Data<br>';
					echo anchor('Sepatu/', 'List data');
					?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php $this->load->view('footer'); ?>