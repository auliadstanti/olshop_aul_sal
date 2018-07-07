

<?php $this->load->view('header') ?>
  <!-- Begin page content -->
  <main role="main" class="container" style="padding-top: 60px;">
    <h1 class="mt-5">Selamat Datang</h1>
    <p class="lead">username = <?php echo $this->session->userdata('logged_in')['username']; ?></p>
    <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
  </main>

<?php $this->load->view('footer') ?>