<?php $this->load->view('header') ?>
<link rel="stylesheet" href="<?php echo base_url('assets/css/carousel.css') ?>">
<!-- Begin page content -->
<main role="main">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
				<div class="container">
					<div class="carousel-caption text-left">
						<h1>Example headline.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
				<div class="container">
					<div class="carousel-caption">
						<h1>Another example headline.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
				<div class="container">
					<div class="carousel-caption text-right">
						<h1>One more for good measure.</h1>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


      <!-- Marketing messaging and featurettes
      	================================================== -->
      	<!-- Wrap the rest of the page in another container to center all the content. -->

      	<div class="container marketing">

                  <?php echo form_open('Cart/update_cart'); ?>
                  <h1>Keranjang</h1>
                  <table cellpadding="6" cellspacing="1" style="width:100%" border="0" class="table table-bordered">
                        <thead class="thead-secondary">
                              <th>Jumlah</th>
                              <th>Sepatu</th>
                              <th>Ukuran</th>
                              <th style="text-align:right">Harga</th>
                              <th style="text-align:right">Sub-Total</th>
                        </thead>

                        <?php $i = 1; ?>

                        <?php foreach ($this->cart->contents() as $items): ?>

                              <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

                              <tr>
                                    <td>
                                          <div class="input-group mb-3">
                                                <?php echo form_input(array('name' => $i.'[qty]','class'=>'form-control' ,'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                                                <div class="input-group-append">
                                                      <a href="<?php echo base_url('Cart/remove_cart/'.$items['rowid']) ?>" class="btn btn-sm btn-danger">X</a>
                                                </div>
                                          </div>

                                    </td>
                                    <td>
                                          <?php echo $items['name']; ?>
                                    </td>
                                    <td>
                                          <?php echo $items['ukuran'] ?>
                                    </td>
                                    <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                                    <td style="text-align:right">Rp. <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                              </tr>

                              <?php $i++; ?>

                        <?php endforeach; ?>

                        <tr>
                              <td colspan="3"> </td>
                              <td class="right"><strong>Total</strong></td>
                              <td class="right">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                        </tr>

                  </table>

                  <p>
                        <?php echo form_submit('', 'Update your Cart',array('class'=>'btn btn-success')); ?>
                        <a href="<?php echo base_url('Cart/checkout') ?>" class="btn btn-primary">Checkout</a>
                  </p>

            </div><!-- /.container -->


            <!-- FOOTER -->
            <footer class="container">
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
          </footer>
    </main>

    <?php $this->load->view('footer') ?>