<div class="content-wrapper">
        <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
            Add Setting Details
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-wrench" aria-hidden="true"></i>Home</a></li>
            <li><a href="<?php echo base_url(); ?>Settings_ctrl/view_settings">Settings</a></li>
            <li class="active">Add Settings</li>
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
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Setting Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                 <form role="form" action="" method="post" data-parsley-validate="" class="validate" enctype="multipart/form-data">
				 <div class="box-body">
				 <div class="col-md-6">
					 <div class="form-group">
                            <label class="intrate">Title</label>
                            <input class="form-control required regcom" type="text" name="title" data-parsley-trigger="keyup" required="" value="<?php echo $result->title; ?>">
                       </div>			
						 <div class="form-group">
                             <label class="intrate">Mini Title</label>
                              <input class="form-control required regcom" type="text" name="mini_title" data-parsley-trigger="keyup" required=""  value="<?php echo $result->mini_title; ?>">
                          </div>		
							<div class="form-group">
                                 <label class="intrate">Smtp Username</label>
                                 <input class="form-control required regcom" type="text" name="smtp_username" data-parsley-trigger="keyup" required=""  value="<?php echo $result->smtp_username; ?>">
                            </div>	
							<div class="form-group">
                                  <label  class="intrate">Smtp Host</label>
                                  <input 	class="form-control regcom required" type="text" name="smtp_host" data-parsley-trigger="keyup" required=""  value="<?php echo $result->smtp_host; ?>" >
                             </div>
							<div class="form-group">
                                   <label  class="intrate">Admin Email</label>
                                   <input 	class="form-control regcom required" type="text" name="admin_email" data-parsley-trigger="keyup" required="" value="<?php echo $result->admin_email; ?>" >
                            </div>
						    <div class="form-group has-feedback">
								   <label for="exampleInputEmail1">Logo</label>
								   <input name="logo" class="" accept="image/*" type="file" > 
								   <img src="<?php echo base_url().$result->logo; ?>" width="100px" height="100px" alt="Picture Not Found"/>
						    </div>		   
                     <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Save" id="taxiadd">                      
                     </div>
                  </div>
				        <div class="col-md-6">
						      <div class="form-group">
                                    <label class="intrate">Facebook ID</label>
                                    <input class="form-control required regcom" type="text" name="facebookid" data-parsley-trigger="keyup" required="" id="smtp_username" value="<?php echo $result->facebookid; ?>">
                               </div>	
								<div class="form-group">
                                    <label  class="intrate">Twitter Id</label>
                                    <input 	class="form-control regcom required" type="text" name="twitterid" data-parsley-trigger="keyup" required=""  value="<?php echo $result->twitterid; ?>" >
                                 </div>
								<div class="form-group">
                                    <label  class="intrate">Google Maps API Key</label>
                                    <input 	class="form-control regcom required" type="text" name="apikey" data-parsley-trigger="keyup" required=""  value="<?php echo $result->apikey; ?>" >
                                  </div>      
								  <div class="form-group has-feedback">
										<label for="exampleInputEmail1">Favicon</label>
										<input name="favicon" class="" accept="image/*" type="file">
								   <img src="<?php echo base_url().$result->favicon; ?>" width="100px" height="100px" alt="Picture Not Found"/>	 
								</div>
						</div><!-- /.box-body -->
                </form>
              </div><!-- /.box -->
            </div>
          </div>   <!-- /.row -->
        </section><!-- /.content -->
	</div>
</div>