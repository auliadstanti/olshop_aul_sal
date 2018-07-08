<?php $this->load->view('header') ?>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
<main role="main" class="container" style="padding-top: 60px;">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<div class="card-body">
					<h1 class="card-title">
						Table Users
					</h1>
					<div id="jsGrid"></div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php $this->load->view('footer') ?>
<script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>
