<!DOCTYPE html>
<html>
  <?php $this->load->view('Templates/header-script'); ?>
  <body class="hold-transition <?php echo $this->config->item("theme_color"); ?> sidebar-mini">
  	<div class="wrapper">
	  <?php	 
	  $this->load->view('Templates/header-menu-genial');
	  $this->load->view($page);
	  $this->load->view('Templates/footer');
      ?>    
    </div>
  <?php $this->load->view('Templates/footer-script'); ?>
  </body>
</html>
