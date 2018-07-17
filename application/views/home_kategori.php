<?php $this->load->view('fashe/header') ?>

      <!-- New Product -->
      <section class="newproduct bgwhite p-t-45 p-b-105">
            <div class="container">
                  <div class="sec-title p-b-60">
                        <h3 class="m-text5 t-center">
                              <?php echo $this->uri->segment('3') ?>
                        </h3>
                  </div>

                  <!-- Slide2 -->
                  <div class="wrap-slick2">
                        <div class="slick2">
                              <?php foreach ($data_sepatu as $key => $value): ?>
                                    <div class="item-slick2 p-l-15 p-r-15">
                                    <!-- Block2 -->
                                    <div class="block2">
                                          <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                                <img src="<?php echo base_url('assets/uploads/'.$value['gambar']) ?>" alt="IMG-PRODUCT">

                                                <div class="block2-overlay trans-0-4">
                                                      

                                                      <div class="block2-btn-addcart w-size1 trans-0-4">
                                                            <!-- Button -->
                                                            <a href="<?php echo base_url('Home/detail/'.$value['id']) ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                                  Beli
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>

                                          <div class="block2-txt p-t-20">
                                                <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                      <?php echo $value['nama'] ?>
                                                </a>

                                                <span class="block2-newprice m-text8 p-r-5">
                                                      Rp <?php echo $this->cart->format_number($value['harga']) ?>
                                                </span>
                                          </div>
                                    </div>
                              </div>
                              <?php endforeach ?>
                              <?php if (count($data_sepatu) == 0): ?>
                                    <p class="text-center">KOSONG</p>
                              <?php endif ?>
                        </div>
                  </div>

            </div>
      </section>

      <?php $this->load->view('fashe/footer') ?>