<!DOCTYPE html>
<html lang="en">
<head>
      <title>Home</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
      <link rel="icon" type="image/png" href="<?php echo base_url('fashe_assets/') ?>images/icons/favicon.png"/>
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>fonts/themify/themify-icons.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/animate/animate.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/select2/select2.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/slick/slick.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>css/util.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('fashe_assets/') ?>css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

      <!-- Header -->
      <header class="header1">
            <!-- Header desktop -->
            <div class="container-menu-header">

                  <div class="wrap_header">
                        <!-- Logo -->
                        <a href="<?php echo base_url('') ?>" class="logo">
                              <img src="<?php echo base_url('fashe_assets/') ?>images/icons/logo.png" alt="IMG-LOGO">
                        </a>

                        

                        <!-- Header Icon -->
                        <div class="header-icons">
                              <?php if ($this->session->userdata('logged_in') == null): ?>
                                                      <a href="<?php echo base_url('Login'); ?>" class="header-wrapicon1 dis-block">
                                    <img src="<?php echo base_url('fashe_assets/') ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> Login
                              </a>
                              
                        <?php else: ?>
                                                      <a href="<?php echo base_url('Login/logout'); ?>" class="header-wrapicon1 dis-block">
                                    <img src="<?php echo base_url('fashe_assets/') ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON"> Logout
                              </a>
                              <?php if ($this->session->userdata("logged_in")['level'] == 'admin'): ?>
                                    <a href="<?php echo base_url('Admin'); ?>" class="header-wrapicon1 dis-block ml-3"> Dashboard
                              </a>
                              <?php endif ?>
                                                <?php endif ?>
                              

                              <span class="linedivide1"></span>

                              <div class="header-wrapicon2">
                                    <img src="<?php echo base_url('fashe_assets/') ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                                    <span class="header-icons-noti"><?php echo count($this->cart->contents()) ?></span>

                                    <!-- Header cart noti -->
                                    <div class="header-cart header-dropdown">
                                          <ul class="header-cart-wrapitem">
                                                <?php foreach ($this->cart->contents() as $key => $value): ?>
                                                      <li class="header-cart-item">
                                                            <a href="<?php echo base_url('Cart/remove_cart/'.$value['rowid']) ?>">
                                                      <div class="header-cart-item-img">
                                                            <img src="<?php echo base_url('fashe_assets/') ?>images/item-cart-01.jpg" alt="IMG">
                                                      </div>
</a>
                                                      <div class="header-cart-item-txt">
                                                            <a href="#" class="header-cart-item-name">
                                                                  <?php echo $value['name'] ?>, Ukuran: <?php echo $value['ukuran'] ?>
                                                            </a>

                                                            <span class="header-cart-item-info">
                                                                  <?php echo $value['qty'] ?> x Rp. <?php echo $value['price'] ?>
                                                            </span>
                                                      </div>
                                                </li>
                                                <?php endforeach ?>

                                               
                                          </ul>

                                          <div class="header-cart-total">
                                                Total: Rp. <?php echo $this->cart->format_number($this->cart->total()); ?>
                                          </div>

                                          <div class="header-cart-buttons">
                                                <div class="header-cart-wrapbtn">
                                                      <!-- Button -->
                                                      <a href="<?php echo base_url('Cart') ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                                            View Cart
                                                      </a>
                                                </div>

                                                <div class="header-cart-wrapbtn">
                                                      <!-- Button -->
                                                      <a href="<?php echo base_url('Cart/checkout') ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                                            Check Out
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- Header Mobile -->
            <div class="wrap_header_mobile">
                  <!-- Logo moblie -->
                  <a href="index.html" class="logo-mobile">
                        <img src="<?php echo base_url('fashe_assets/') ?>images/icons/logo.png" alt="IMG-LOGO">
                  </a>

                  <!-- Button show menu -->
                  <div class="btn-show-menu">
                        <!-- Header Icon mobile -->
                        <div class="header-icons-mobile">
                              <a href="#" class="header-wrapicon1 dis-block">
                                    <img src="<?php echo base_url('fashe_assets/') ?>images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                              </a>

                              <span class="linedivide2"></span>

                              <div class="header-wrapicon2">
                                    <img src="<?php echo base_url('fashe_assets/') ?>images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                                    <span class="header-icons-noti">0</span>

                                    <!-- Header cart noti -->
                                    <div class="header-cart header-dropdown">
                                          <ul class="header-cart-wrapitem">
                                                <li class="header-cart-item">
                                                      <div class="header-cart-item-img">
                                                            <img src="<?php echo base_url('fashe_assets/') ?>images/item-cart-01.jpg" alt="IMG">
                                                      </div>

                                                      <div class="header-cart-item-txt">
                                                            <a href="#" class="header-cart-item-name">
                                                                  White Shirt With Pleat Detail Back
                                                            </a>

                                                            <span class="header-cart-item-info">
                                                                  1 x $19.00
                                                            </span>
                                                      </div>
                                                </li>
                                          </ul>

                                          <div class="header-cart-total">
                                                Total: $75.00
                                          </div>

                                          <div class="header-cart-buttons">
                                                <div class="header-cart-wrapbtn">
                                                      <!-- Button -->
                                                      <a href="<?php echo base_url('Cart') ?>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                                            View Cart
                                                      </a>
                                                </div>

                                                <div class="header-cart-wrapbtn">
                                                      <!-- Button -->
                                                      <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                                            Check Out
                                                      </a>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>

                        <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                              <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                              </span>
                        </div>
                  </div>
            </div>

            <!-- Menu Mobile -->
            <div class="wrap-side-menu" >
                  <nav class="side-menu">
                        <ul class="main-menu">
                              <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                                    <span class="topbar-child1">
                                          Free shipping for standard order over $100
                                    </span>
                              </li>

                              <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                                    <div class="topbar-child2-mobile">
                                          <span class="topbar-email">
                                                fashe@example.com
                                          </span>

                                          <div class="topbar-language rs1-select2">
                                                <select class="selection-1" name="time">
                                                      <option>USD</option>
                                                      <option>EUR</option>
                                                </select>
                                          </div>
                                    </div>
                              </li>

                              <li class="item-topbar-mobile p-l-10">
                                    <div class="topbar-social-mobile">
                                          <a href="#" class="topbar-social-item fa fa-facebook"></a>
                                          <a href="#" class="topbar-social-item fa fa-instagram"></a>
                                          <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                                          <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                                          <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                                    </div>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="index.html">Home</a>

                                    </ul>
                                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="product.html">Shop</a>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="product.html">Sale</a>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="cart.html">Features</a>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="blog.html">Blog</a>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="about.html">About</a>
                              </li>

                              <li class="item-menu-mobile">
                                    <a href="contact.html">Contact</a>
                              </li>
                        </ul>
                  </nav>
            </div>
      </header>
