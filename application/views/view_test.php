<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Events</title>
 
	     <link type="text/css" rel="stylesheet" href="<?=base_url()?>vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>css/pages/tables.css" />



</head>

<body class="body" style="-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: -moz-none;-o-user-select: none;user-select: none;">

<div class="bg-dark" id="wrap">
    <div id="top">
        <!-- .navbar -->
  <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
       
        <!-- /#left -->
         
                            <div class="card-block m-t-35" id="user_body">

                        <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                            <div role="alert" class="alert alert-success">
                                    <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                    <strong>Well done!!</strong> <?=$this->session->flashdata('SUCCESSMSG')?>
                            </div>
                        <?php } ?>

                                <div class="table-toolbar">
                                    <div class="btn-group">
                                        <a href="<?=base_url('Test_controller/TestRegister')?>" id="editable_table_new" class=" btn btn-default">
                                        Add Test &nbsp;<i class="fa fa-plus"></i>
                                    </a>
                                    </div>
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid" border="1px solid black">
                                            <thead>
                                                <tr role="row">
                                                    
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Test1</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Test2</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Test3</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">Test4</th>
                                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="2" colspan="1">Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if(!empty($getTest))
                                                {
													foreach ($getTest as $value)
													{ ?>
														<tr>
															
														
                                                      <td><?=$value->test1?></td>
                                                      <td><?=$value->test2?></td>
                                                      <td><?=$value->test3?></td>
                                                      <td><?=$value->test4?></td>
                                                      <td><a href='delete_test?test_id=<?php echo $value->test_id ?>'>Delete</a></td>
                                                      <td><a href='update_test?test_id=<?php echo $value->test_id ?>'>Update</a></td>
                                                      <!-- <td><?php echo anchor('Test_controller/delete_test?test_id='.$value->test_id, 'DELETE', 'id="$value->test_id"');?></td>
                                                      <td><?php echo anchor('Test_controller/update_test?test_id='.$value->test_id, 'UPDATE', 'id="$value->test_id"');?></td> -->
															
														</tr>
												<?php	}
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
    </div>


</div>

</body>

</html>
