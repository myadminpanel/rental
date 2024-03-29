<?php $id = $this->session->userdata('admin');  ?>
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Deal Translation 
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Dealtranslation/view_deal"> Deal Translation </a></li>
         <li class="active">Edit Deal Translation</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->
		 
         <div class="col-md-12">
            <?php
               if($this->session->flashdata('message')) {
               $message = $this->session->flashdata('message');
               ?>
            <div class="alert alert-<?php echo $message['class']; ?>">
               <button class="close" data-dismiss="alert" type="button">×</button>
               <?php echo $message['message']; ?>
            </div>
            <?php
               }
               ?>
         </div>
		 <?php 
				$final_lang = '';
				$textFile = $language_name;
				$location = '../application/language/'.$textFile.'/'.'';
				$lang_directory = directory_map($location, FALSE);	
				if(is_bool($lang_directory ) === false):	
					if(in_array('deal_lang.php',$lang_directory)):				
						$final_lang = 'deal_lang';
					else:
						$this->load->view('error_trans');
						exit();
					endif;
				else:
					$this->load->view('error_trans');
					exit();
				endif;			
				if($final_lang):	
					$extension = ".php";       					
					include '../application/language/'.''.$textFile.'/'.$final_lang.$extension;
				endif;
				?>
	 <form role="form"  method="post" id="tariffedit">
		<input type="hidden" name="created_by" value="<?php echo $id; ?>">
		<input type="hidden" name="created_date" value="<?php echo date('Y-m-d  H:i:s'); ?>" >
		<input  type="hidden" name="lang['home_lang']" value="home_lang">
		<input  type="hidden" name="lang['commute_lang']" value="commute_lang">
		<input  type="hidden" name="lang['login_lang']" value="login_lang">
		<input  type="hidden" name="lang['tariff_lang']" value="tariff_lang">	 
		<input  type="hidden" name="lang['offers_lang']" value="offers_lang">
		<input  type="hidden" name="lang['chronologypopup_lang']" value="chronologypopup_lang">
		<input  type="hidden" name="lang['coupebooking_lang']" value="coupebooking_lang">
		<input  type="hidden" name="lang['renter_lang']" value="renter_lang">
		<div class="col-md-12">
            <!-- general form elements -->						 
            <div class="box">
               <div class="box-header with-border">
                  <h3 class="box-title">Edit General Deal page Details</h3>
				  <div class="edituser" tabindex='1'></div>
               </div>
               <!-- /.box-header -->
               <!-- form start -->               
			 
			    <div class="box-body">  
                    <div class="col-md-12">
					 <input  name="id"  id="id" class="form-control  required regcom sample" value="<?php echo $textFile; ?>" type="hidden">
					 	<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Language Name</label>
                             <input class="form-control  required regcom sample" placeholder="Language Name" name="lang['language']" value="<?php echo $lang['language'];?>" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
						<input class="form-control  required regcom sample"   placeholder="Page Name" value="deal_lang" name="lang['page_name']"  type="hidden">
                       
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">View terms and conditions</label>
                             <input  name="lang['deal_slide_A1']"  value="<?php if(!empty($lang['deal_slide_A1'])): echo $lang['deal_slide_A1']; endif;?>"  placeholder="View terms and conditions"  class="form-control  required regcom sample" type="text"  required="">
                             <span class="glyphicon  form-control-feedback"></span>
                        </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sign-up for Deals Newsletter</label>
                            <input type="text" name="lang['deal_slide_A2']"  value="<?php if(!empty($lang['deal_slide_A2'])): echo $lang['deal_slide_A2']; endif;?>"placeholder="Sign-up for Deals Newsletter" class="form-control required regcom" required="">
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Car Category</label>
                            <input type="text" name="lang['deal_slide_A3']"  value="<?php if(!empty($lang['deal_slide_A3'])): echo $lang['deal_slide_A3']; endif;?>" placeholder="Select Car Category" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div>
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Duration</label>
                            <input type="text" name="lang['deal_slide_A4']"  value="<?php if(!empty($lang['deal_slide_A4'])): echo $lang['deal_slide_A4']; endif;?>" placeholder="Select Duration" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
					    <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Select Zone</label>
                            <input type="text" name="lang['deal_slide_A5']"  value="<?php if(!empty($lang['deal_slide_A5'])): echo $lang['deal_slide_A5']; endif;?>" placeholder="Select Zone" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						 <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">MOST POPULAR</label>
                            <input type="text" name="lang['deal_slide_B1']"  value="<?php if(!empty($lang['deal_slide_B1'])): echo $lang['deal_slide_B1']; endif;?>" placeholder="MOST POPULAR" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Sort By Car Makes</label>
                            <input type="text" name="lang['deal_slide_B2']"  value="<?php if(!empty($lang['deal_slide_B2'])): echo $lang['deal_slide_B2']; endif;?>"placeholder="Sort By Car Makes" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						<div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Default</label>
                            <input type="text" name="lang['deal_slide_B3']"  value="<?php if(!empty($lang['deal_slide_B3'])): echo $lang['deal_slide_B3']; endif;?>"placeholder="Default" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						  <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Book</label>
                            <input type="text" name="lang['deal_slide_B4']" value="<?php if(!empty($lang['deal_slide_B4'])): echo $lang['deal_slide_B4']; endif;?>" placeholder="Book" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">km-free</label>
                            <input type="text" name="lang['deal_slide_B5']" value="<?php if(!empty($lang['deal_slide_B5'])): echo $lang['deal_slide_B5']; endif;?>"  placeholder="km-free" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">minutes</label>
                            <input type="text" name="lang['deal_slide_B6']" value="<?php if(!empty($lang['deal_slide_B6'])): echo $lang['deal_slide_B6']; endif;?>"  placeholder="minutes" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">hours</label>
                            <input type="text" name="lang['deal_slide_B7']" value="<?php if(!empty($lang['deal_slide_B7'])): echo $lang['deal_slide_B7']; endif;?>"  placeholder="hours" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">days</label>
                            <input type="text" name="lang['deal_slide_B8']"  value="<?php if(!empty($lang['deal_slide_B8'])): echo $lang['deal_slide_B8']; endif;?>" placeholder="days" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">% Off</label>
                            <input type="text" name="lang['deal_slide_B9']" value="<?php if(!empty($lang['deal_slide_B9'])): echo $lang['deal_slide_B9']; endif;?>"  placeholder="% Off" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
                            <label for="exampleInputEmail1">Seater</label>
                            <input type="text" name="lang['deal_slide_B10']" value="<?php if(!empty($lang['deal_slide_B10'])): echo $lang['deal_slide_B10']; endif;?>" placeholder="Seater" class="form-control required regcom"  required="" >
                            <span class="glyphicon  form-control-feedback"></span>
                          </div> 
				 </div>
			</div>
            <!-- /.box -->
         </div>
			<div class="col-md-12">
				<div class="form-group has-feedback">                                       
                      <input type="button" class="btn btn-primary" value="Submit"   id="dealedit1">
                        <button type="reset" class="btn btn-primary">Reset </button>
                   </div> 
			 </div>
	   </div>
   </form>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
</div>
	<script>
	base_url = "<?php echo base_url(); ?>";
	config_url = "<?php echo base_url(); ?>";
	</script>
    <script type="text/javascript">
</script>
	 