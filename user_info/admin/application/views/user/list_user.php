<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>	List User</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <script src="<?php echo WEB_DIR; ?>scripts/jquery.min.js"></script>	

        <?php $this->load->view('links'); ?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('header'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left"> 
          <!-- Left side column. contains the logo and sidebar -->
          <?php $this->load->view('leftmenu'); ?>

          <!-- Right side column. Contains the navbar and content of the page -->
          <aside class="right-side"> 
            <!-- Content Header (Page header) -->
            <section class="content-header">
              <h1> List Users</h1>
             
            </section>

            <!-- Main content -->
            <section class="content">
              <div class='row'>
                <div class='col-md-12'>
                  <div class='box box-info'>
                    <div class="box">
                      <div class='box-body table-responsive'>
                      <?php if($this->session->flashdata('msg')!='')
					  {
						  echo $this->session->flashdata('msg');
					  }
					  ?>
                        <table id="example1" class="table table-bordered table-striped">
                          <thead>
                            <tr class='thefilter'>
                              <th class='50'>#ID</th>
                              <th width="150" class='hidden-350'>Name</th>
                              <th width="150" class='hidden-350 txt-left'>Email</th>
                              <th width="150">Country</th>
							  <th width="150">Date of Birth</th>
							  <th width="150">Mobile</th>
							  <th width="150">About User</th>
							  </tr>
                          </thead>
                          <tbody>
		 <?php 
		$i= 1;
		if(isset($user_data)) 
		{ 
			if($user_data!= '') 
			{ 
				foreach($user_data as $user_detail) 
				{ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $user_detail->name; ?></td>
						<td><?php echo $user_detail->email; ?></td>
						<td><?php echo $user_detail->country; ?></td>
						<td><?php echo $user_detail->birth_date; ?></td>
						<td><?php echo $user_detail->mobile_number; ?></td>
						<td><?php echo $user_detail->about_you; ?></td>
                    </tr>
                              <?php 
								$i++;
								}
                            }
						}
						?>
					</tbody>
					</table>
				</div>
				</div>
            <!-- /.box --> 
            
          </div>
          <!-- /.col--> 
        </div>
        <!-- ./row --> 
        
      </div>
    </section>
    <!-- /.content --> 
  </aside>
  <!-- /.right-side --> 
</div>
<!-- ./wrapper --> 

<!-- add new calendar event modal -->

<?php //$this->load->view('footer'); ?>

<!-- jQuery 2.0.2 --> 
<script src="<?php echo WEB_DIR; ?>scripts/jquery.min.js"></script>	 
<!-- Bootstrap --> 
<script src="<?php echo WEB_DIR_ADMIN ?>js/bootstrap.min.js" type="text/javascript"></script> 
<!-- DATA TABES SCRIPT --> 
<script src="<?php echo WEB_DIR_ADMIN ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script> 
<script src="<?php echo WEB_DIR_ADMIN ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script> 
<!-- AdminLTE App --> 
<script src="<?php echo WEB_DIR_ADMIN ?>js/AdminLTE/app.js" type="text/javascript"></script> 

<!-- page script --> 
<script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                
            });
        </script>
</body>

</html>