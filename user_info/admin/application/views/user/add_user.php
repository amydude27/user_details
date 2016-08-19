<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add User Information</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link href="<?php echo WEB_DIR_ADMIN ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo WEB_DIR_ADMIN ?>css/AdminLTE.css" rel="stylesheet" type="text/css" />
<script src="<?php echo WEB_DIR; ?>scripts/jquery.min.js"></script>       
<script type="text/javascript" src="<?php echo WEB_DIR; ?>js/Validation/js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo WEB_DIR; ?>js/Validation/js/languages/jquery.validationEngine-en.js"></script>
<link rel="stylesheet" href="<?php echo WEB_DIR; ?>js/Validation/css/validationEngine.jquery.css" media="all" type="text/css" />

<script src="<?php echo WEB_DIR_ADMIN ?>js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo WEB_DIR_ADMIN ?>js/AdminLTE/app.js" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo WEB_DIR; ?>css/jquery-ui1.css" />

 <script type="text/javascript">
           
 </script>
    </head>
    <body class="skin-blue">
        <?php $this->load->view('header'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php $this->load->view('leftmenu'); ?>

            <aside class="right-side">
                <section class="content-header">
                    <h1>
                        Add User Information
                    </h1>
	
				</section>

                <section class="content">

                    <div class='row'>
                        <div class='col-md-12'>
                            <div class='box box-info'>
                                <div class='box-header'>
                                    <div class="pull-right box-tools">
                                    </div>
                                </div>
                                <div class='box-body pad'>
                                    <form action="<?php echo WEB_URL_ADMIN ?>admin/insert_user" method="POST" enctype="multipart/form-data" id="add_form" name="add_form">
                                  
										
										<div class="form-group ">
                                          
										
                                     	<div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name"  class="form-control  validate[required]" style="width:350px;">
                                        </div>
										
										<div class="form-group">
                                            <label>Country</label>
										    <input type="text" name="country"  class="form-control  validate[required]" style="width:350px;">
                                        </div>
										
										<div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control  validate[required]" style="width:350px;">
                                        </div>
										
										<div class="form-group">
                                            <label>Mobile Number</label>
                                            <input type="text" name="mobile"  class="form-control  validate[required,custom[onlyNumber]]" style="width:350px;">
                                        </div>
										
										<div class="form-group">
                                            <label>Date of Birth</label>
                                            <input type="text" name="dob"  id="datepicker" class="form-control  validate[required]" style="width:350px;">
                                        </div>
										
										<div class="form-group">
                                            <label>About You</label><br>
                                           <textarea type="text" name="about" rows="5" cols="50" class="form-control" style="resize:none;"></textarea>
                                        </div>
										
										                                  
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                    
                                    
                                    
                                    
                                </div>
                            </div>

                            
                        </div>
                    </div>



                </section>
            </aside>
        </div>


    </body>
</html>
<script class="secret-source">
	$(document).ready(function(){
		$("#add_form").validationEngine();
		});
		
		$(function() {
       
		 $("#datepicker").datepicker({
            
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: '-100:+0'
        });
		});
	</script>