<?php include"include/header.php"; ?>
<?php include"include/sidebar.php"; ?>

 
          <script src="js/jquery-3.1.1.min.js"></script>

            <?php include"include/navbar.php"; ?>

            <?php 
                include 'employee.php';
                $employeeObj = new Employee();
            ?>

                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2 class="text-danger">Electrical Information</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active">
                                <strong>Electrical Information</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>

             
                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5 class="text-primary">Electrical Information</h5>
                                </div>
                                <div class="ibox-content">

                                    <img src="img/info/plc.png" alt="">
                                    <p>&nbsp;</p>

                                </div>

                            </div>
                            <!-- ibox -->
                        </div>
                        <!-- col-lg-12 -->


                        <div class="col-lg-4">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Incomer Detail</h5>
                                </div>
                                <div class="ibox-content">
                                    <label>SITE A/GB1/(incomer name)</label> 
                                    <p class="text-muted">STATUS</p>
                                    <ul class="folder-list m-b-md" style="padding: 0">
                                        <li><a href="#"> <i class="fa fa-caret-right "></i> State <span class="pull-right"><span class="label label-danger">Close</span></span> </a></li>
                                        <li><a href="#"> <i class="fa fa-caret-right "></i> Module <span class="pull-right"> <span class="pull-right"><span class="label label-success">Remote</span> </a></li>
                                    </ul>

                                    <p>&nbsp;</p>

                                    <p class="text-info">COMMAND</p>
                                    <ul class="folder-list m-b-md" style="padding: 0">
                                        <li><a href="#"> <i class="fa fa-caret-right "></i> Last command <?php echo date("d/m/Y H:i:s"); ?> <span class="pull-right"><span class="label label-info">Success</span></span> </a></li>
                                        <li> 
                                            <br>
                                            <div class="switch">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" checked class="onoffswitch-checkbox" id="example1">
                                                    <label class="onoffswitch-label" for="example1">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <p>&nbsp;</p>
    
                                    <p class="text-muted">ENERGY METER</p>
                                    <ul class="folder-list m-b-md" style="padding: 0">
                                        <li><a href="#"> <i class="fa fa-caret-right "></i> Energy Merte AC Name  </a></li>
                                    </ul>

                                    <p>&nbsp;</p>
    
                                    <p class="text-muted">PROTECTION RELAY</p>
                                    <ul class="folder-list m-b-md" style="padding: 0">
                                        <li><a href="#"> <i class="fa fa-caret-right "></i> Protection Relay Name  </a></li>
                                    </ul>

                                </div>

                            </div>
                            <!-- ibox -->
                        </div>
                        <!-- col-lg-12 -->


                    </div>
                    <!-- row -->
                </div>
 
<?php include"include/footer.php"; ?>