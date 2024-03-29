<div class="content-wrapper" >
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Deal Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>Welcome/"><i class="fa fa-user-md"></i>Home</a></li>
         <li class="active">View Deal Details</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-xs-12">
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
         <div class="col-xs-12">
            <!-- /.box -->
            <div class="box">
               <div class="box-header">
                  <h3 class="box-title">View Deal Details</h3>
               </div>
               <!-- /.box-header -->
               <div class="box-body">
                  <table id="" class="table table-bordered table-striped datatable">
                     <thead>
                        <tr>
                           <th class="hidden">ID</th>
						   <th>Car Name</th>   
                           <th>From Date</th>  
						   <th>From Time</th>						   
                           <th>To Date</th> 
						   <th>To Time</th>						   
                           <th width="">Action</th>
                        </tr>
                     </thead> 
                     <tbody>
                        <?php
                           foreach($data as $deal) {	
                   ?>
                        <tr>
                           <td class="hidden"><?php echo $deal->id; ?></td>
                           <td class="center"><?php echo $deal->car_name; ?></td>
                           <td class="center"><?php echo $deal->from_date; ?></td>
						   <td class="center"><?php echo $deal->from_time; ?></td>
						   <td class="center"><?php echo $deal->to_date; ?></td>
						   <td class="center"><?php echo $deal->to_time; ?></td>                                                                              
                           <td class="center">	                         	  
							  <a class="btn btn-sm bg-olive show-deal"   href="javascript:void(0);"  data-id="<?php echo $deal->id; ?>"> <i class="fa fa-fw fa-eye"></i> View </a>	
                              <a class="btn btn-sm btn-primary" href="<?php echo base_url();?>Deal/edit/<?php echo $deal->id; ?>"> <i class="fa fa-fw fa-edit"></i>Edit</a>
							  <a class="btn btn-sm btn-danger" href="<?php echo base_url();?>Deal/deletedeal/<?php echo $deal->id; ?>" onClick="return doconfirm()"> <i class="fa fa-fw fa-trash"></i>Delete</a>	
                           </td>
                        </tr>
                        <?php
                           }
                           ?>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th class="hidden">ID</th>
						   <th>Car Name</th>   
                           <th>From Date</th> 
						   <th>From Time</th>
                           <th>To Date</th> 
						   <th>To Time</th>						   					   
                           <th width="">Action</th>
                        </tr>
                     </tfoot>
                  </table>
               </div>
               <!-- /.box-body -->
            </div>
            <!-- /.box -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
<div class="modal fade modal-wide" id="popup-dealModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">View Deal Details</h4>
         </div>
         <div class="modal-dealbody">
         </div>
         <div class="business_info">
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>