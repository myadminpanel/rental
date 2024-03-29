
<?php $settings = get_homesettings(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

	 <link href="<?php echo base_url();?>assets/css/parsley/parsley.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
   
    <div class="login-box">	
	
      <div class="login-logo">
       <img src="<?php echo base_url();?><?php echo $settings->logo; ?>" >
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php if(validation_errors()) { ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
            <?php } ?>
        <form action="" method="post" data-parsley-validate="" class="validate">
          <div class="form-group has-feedback">
            <input type="text" class="form-control required"  required="" name="username" placeholder="Username"  data-parsley-trigger="change" required="">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control required" data-parsley-trigger="change" required="" name="password" placeholder="Password" data-parsley-trigger="change" required="">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <!-- /.col -->
            <div class="col-xs-12 right">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

  </body>
</html>
<style>
.login-page, .register-page{
	    background: #78BC27;
}
.btn-primary{
	    background-color: #5FA244;
    border-color: #5FA244;
}
.btn-primary:hover, .btn-primary:active, .btn-primary.hover {
	background-color: #5FA244;
}

</style>
 <script>
   base_url = "<?php echo base_url(); ?>";
   config_url = "<?php echo base_url(); ?>";
   </script>
   <!-- jQuery 2.1.4 -->
   <script src="<?php echo base_url(); ?>assets/js/jQuery-2.1.4.min.js"></script>
   <!-- Bootstrap 3.3.5 -->
   <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
   <!--[validation js]-->
   <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/parsley.min.js"></script>