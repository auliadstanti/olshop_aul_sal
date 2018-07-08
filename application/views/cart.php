<?php $this->load->view('fashe/header') ?>
 <section class="slide1">
            <div class="wrap-slick1">
                  <div class="slick1">
                        <div class="item-slick1 item1-slick1" style="background-image: url(<?php echo base_url('fashe_assets/') ?>images/master-slide-02.jpg);">
                              <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                                          Women Collection 2018
                                    </span>

                                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                                          New arrivals
                                    </h2>

                                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                                          <!-- Button -->
                                          <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                                Shop Now
                                          </a>
                                    </div>
                              </div>
                        </div>

                        <div class="item-slick1 item2-slick1" style="background-image: url(<?php echo base_url('fashe_assets/') ?>images/master-slide-03.jpg);">
                              <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
                                          Women Collection 2018
                                    </span>

                                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                                          New arrivals
                                    </h2>

                                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                                          <!-- Button -->
                                          <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                                Shop Now
                                          </a>
                                    </div>
                              </div>
                        </div>

                        <div class="item-slick1 item3-slick1" style="background-image: url(<?php echo base_url('fashe_assets/') ?>images/master-slide-04.jpg);">
                              <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                                          Women Collection 2018
                                    </span>

                                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                                          New arrivals
                                    </h2>

                                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                                          <!-- Button -->
                                          <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                                Shop Now
                                          </a>
                                    </div>
                              </div>
                        </div>

                  </div>
            </div>
      </section>

      <!-- Banner2 -->
      <section class="banner2 bg5 p-t-55 p-b-55">
            <div class="container">
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
            </div>
      </section>
                  

    <?php $this->load->view('fashe/footer') ?>