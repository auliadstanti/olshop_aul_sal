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
                  <div class="row">
                        <div class="col-md-4 mx-auto">
                              <?php echo form_open('Cart/insert_cart'); ?>
                                          <input type="hidden" name="id" value="<?php echo $sepatu['id'] ?>">
                                          <input type="hidden" name="nama" value="<?php echo $sepatu['nama'] ?>">
                                          <div class="form-group">
                                                <label for="">Harga</label>
                                                <input type="text" class="form-control" readonly="" value="<?php echo $sepatu['harga'] ?>" name="harga">
                                          </div>
                                          <div class="form-group">
                                                <label for="">Ukuran</label>
                                                <select name="ukuran" class="form-control">
                                                      <?php foreach (explode(',',$sepatu['ukuran_tersedia']) as $v): ?>
                                                            <option value="<?php echo $v ?>"><?php echo $v ?></option>
                                                      <?php endforeach ?>
                                                </select>
                                          </div>
                                          <div class="form-group">
                                                <label for="">Jumlah</label>
                                                <input type="number" class="form-control" min="1" value="1" max="<?php echo $sepatu['stok'] ?>" name="jumlah">
                                          </div>
                                          <input type="submit" value="Add to Cart" class="btn btn-info">
                                          <?php echo form_close(); ?>
                        </div>
                  </div>
            </div>
      </section>

      <?php $this->load->view('fashe/footer') ?>