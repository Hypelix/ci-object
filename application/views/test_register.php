<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee Shift Schedule</title>





</head>

<body class="body">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->

        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">

        <!-- /#left -->
         <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-sm-5 col-lg-6 skin_txt">
                        <h4 class="nav_top_align">
                            <i class="fa fa-pencil"></i>
						     Attendance Register
                        </h4>
                    </div>
                    
                                <div class="card-block">
										<?php if ($this->session->flashdata('SUCCESSMSG')) { ?>
										<div role="alert" class="alert alert-success">
										   <button data-dismiss="alert" class="close" type="button">
											   <span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
										   <strong>Well done!</strong>
										   <?= $this->session->flashdata('SUCCESSMSG') ?>
										</div>
										<?php } ?>
									<form action="" method="post">
                    <div class="row">
                      <div class="col-lg-4 input_field_sections">
                          <h5>Test1<span style="color: #cc0000">*</span></h5>
                         <input required type="text" class="form-control" name="test1" value=""/>
                      </div>

                    </div>

                  <div class="row">
										<div class="col-lg-4 input_field_sections">
                        <h5>Test2<span style="color: #cc0000">*</span></h5>
											<div >
												<input required="" type="text" class="form-control" name="test2" style="background:white">
												<span class="input-group-addon" style="cursor: pointer;"><i class="fa fa-clock-o"></i></span>
											</div>
										</div>
							    </div>


                  <div class="row">
                    <div class="col-lg-4 input_field_sections">
                        <h5>Test3<span style="color: #cc0000">*</span></h5>
                       <input required type="text" class="form-control" name="test3" value=""/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4 input_field_sections">
                        <h5>Test4<span style="color: #cc0000">*</span></h5>
                        <input required="" type="text" class="form-control" name="test4" value="" style="background-color: white;"/>
                      </div>
                  </div>

                  <div class="row">


                                    <div class="row">
										<div class="col-lg-8 input_field_sections">
											<button type="submit" class="btn btn-primary">Save</button>
									    </div>
						            </div>
									</form>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
                <!-- /.outer -->
            </div>
        </div>
    </div>

</div>
<!-- /#wrap -->
<!-- global scripts-->
<script type="text/javascript" src="<?=base_url();?>js/components.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/custom.js"></script>
<!-- global scripts end-->

<script type="text/javascript" src="<?=base_url();?>vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.js" ></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>vendors/countUp.js/js/countUp.min.js"></script>


<!--end of plugin scripts-->
<script type="text/javascript" src="<?=base_url();?>js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/jquery-ui.js"></script>

  <script>
  $( function() {
	  $( ".datepicker" ).datepicker({
			dateFormat: "yy-mm-dd"
		});
		 $('.timepicker1').timepicker();
  });
  </script>


</body>
</html>
