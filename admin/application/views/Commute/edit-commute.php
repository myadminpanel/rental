<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Edit Commute
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-male"></i>Home</a></li>
         <li><a href="<?php echo base_url(); ?>Commute/add"> Commute</a></li>
         <li class="active">Edit Commute</li>
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
                  <h3 class="box-title">Edit Commute</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
               <form role="form" action="" method="post"  data-parsley-validate="" class="validate" enctype="multipart/form-data">		
                  <div class="box-body">                 
                     <div class="col-md-12">
					      <div class="form-group has-feedback">
								<label for="exampleInputEmail1">Commute Name</label>
								<input type="text" class="form-control required"  value="<?php echo $data->name; ?>"	 data-parsley-trigger="change"  data-parsley-minlength="2"   required="" name="name"  placeholder="Name">
								<span class="glyphicon  form-control-feedback"></span>
                          </div> 
						   <div class="form-group has-feedback">
								<label for="exampleInputEmail1">From Date</label>
								<input type="text" class="form-control required datetimepicker1"  id="from_datetimepicker" value="<?php echo $data->from_date." " .$data->from_time; ?>"    required="" name="from_date"  placeholder="From Date">
								<span class="glyphicon  form-control-feedback"></span>
                           </div>  
						 <div class="form-group has-feedback">
								<label for="exampleInputEmail1">To Date</label>
								<input type="text" class="form-control required  to_datetimepicker"  value="<?php echo $data->to_date." " .$data->to_time; ?>"   required="" name="to_date"  placeholder="To Date">
								<span class="glyphicon  form-control-feedback"></span>
                          </div> 

                  <!-- /.box-body -->
				   </div>
				  </div>
				  <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>