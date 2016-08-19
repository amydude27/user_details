<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <?php $this->load->view('links'); ?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('header'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
			
			


      <aside class="right-side" style="margin-left:15px;">
			<section class="content-header">
				<h1>
                     Dashboard<small>Control panel</small>
                </h1>
				       
			</section>
			
			<section class="content">
				<div class="row">
                <a href="<?php echo site_url(); ?>/admin/view_all_user">
					<div class="col-md-2"> 
						<div class="col_main_box">
							<div class="coln_in_box">
								<i class="fa fa-list"></i>
								<h4>View List of User</h4>
							</div>
						</div>
					</div>	</a>
					
			
					
                    <a href="<?php echo site_url() ?>/admin/add_user">
					<div class="col-md-2"> 
						<div class="col_main_box">
							<div class="coln_in_box">
								<i class="fa fa-edit"></i>
								<h4>Add User</h4>
							</div>
						</div>
					</div></a>
					
				
				</div>
			</section>
		 </aside>
        </div><!-- ./wrapper -->
        

       <?php $this->load->view('footer'); ?>

    </body>
</html>