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

                        <div class="col-lg-6">
                            <div class="text-danger">
                                <h5><i class="fa fa-server"></i>  PV System final yield</h5>
                            </div>
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-4"> PV System final yield</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-5">PV Array yield</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-6">Data</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-4" class="tab-pane active">
                                        <div class="panel-body">
                                            <p>PV System final yield</p><br>

                                            <div>
                                                <div>
                                                    <span>SITE A</span>
                                                    <small class="pull-right">4.38 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 80%;" class="progress-bar"></div>
                                                </div>

                                                <div>
                                                    <span>SITE B</span>
                                                    <small class="pull-right">2.27 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 40%;" class="progress-bar progress-bar-danger"></div>
                                                </div>

                                                <div>
                                                    <span>SITE C</span>
                                                    <small class="pull-right">3.79 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 60%;" class="progress-bar progress-bar-warning"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div id="tab-5" class="tab-pane">
                                        <div class="panel-body">
                                            <p>PV Array yield</p><br>


                                            <div>
                                                <div>
                                                    <span>SITE A</span>
                                                    <small class="pull-right">4.30 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 70%;" class="progress-bar"></div>
                                                </div>

                                                <div>
                                                    <span>SITE B</span>
                                                    <small class="pull-right">2.70 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 35%;" class="progress-bar progress-bar-danger"></div>
                                                </div>

                                                <div>
                                                    <span>SITE C</span>
                                                    <small class="pull-right">3.80 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 65%;" class="progress-bar progress-bar-warning"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-6" class="tab-pane">
                                        <div class="panel-body">
                                            <p>Data</p><br>


                                            <div>
                                                <div>
                                                    <span>SITE A</span>
                                                    <small class="pull-right">4.50 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 90%;" class="progress-bar"></div>
                                                </div>

                                                <div>
                                                    <span>SITE B</span>
                                                    <small class="pull-right">3.27 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 45%;" class="progress-bar progress-bar-danger"></div>
                                                </div>

                                                <div>
                                                    <span>SITE C</span>
                                                    <small class="pull-right">3.60 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 55%;" class="progress-bar progress-bar-warning"></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="text-danger">
                                <h5><i class="fa fa-server"></i>  Energetical avaliablity and performance ratio</h5>
                            </div>
                            <div class="tabs-container">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-1"> PV System final yield</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-2">PV Array yield</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-3">Data</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane active">
                                        <div class="panel-body">
                                            <p>PV System final yield</p><br>

                                            <div>
                                                <div>
                                                    <span>SITE A</span>
                                                    <small class="pull-right">4.38 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 80%;" class="progress-bar"></div>
                                                </div>

                                                <div>
                                                    <span>SITE B</span>
                                                    <small class="pull-right">2.27 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 40%;" class="progress-bar progress-bar-danger"></div>
                                                </div>

                                                <div>
                                                    <span>SITE C</span>
                                                    <small class="pull-right">3.79 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 60%;" class="progress-bar progress-bar-warning"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-2" class="tab-pane">
                                        <div class="panel-body">
                                            <p>PV Array yield</p><br>


                                            <div>
                                                <div>
                                                    <span>SITE A</span>
                                                    <small class="pull-right">4.30 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 70%;" class="progress-bar"></div>
                                                </div>

                                                <div>
                                                    <span>SITE B</span>
                                                    <small class="pull-right">2.70 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 35%;" class="progress-bar progress-bar-danger"></div>
                                                </div>

                                                <div>
                                                    <span>SITE C</span>
                                                    <small class="pull-right">3.80 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 65%;" class="progress-bar progress-bar-warning"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane">
                                        <div class="panel-body">
                                            <p>Data</p><br>


                                            <div>
                                                <div>
                                                    <span>SITE A</span>
                                                    <small class="pull-right">4.50 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 90%;" class="progress-bar"></div>
                                                </div>

                                                <div>
                                                    <span>SITE B</span>
                                                    <small class="pull-right">3.27 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 45%;" class="progress-bar progress-bar-danger"></div>
                                                </div>

                                                <div>
                                                    <span>SITE C</span>
                                                    <small class="pull-right">3.60 h</small>
                                                </div>
                                                <div class="progress progress-small">
                                                    <div style="width: 55%;" class="progress-bar progress-bar-warning"></div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <!-- col-lg-6 -->



                        <!-- col-lg-6 -->

                    </div>
                    <!-- row -->

                    <br>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Live Chart </h5>
                                    <div class="ibox-tools">
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="#">Config 1</a>
                                            </li>
                                            <li><a href="#">Config 2</a>
                                            </li>
                                        </ul>
  
                                    </div>
                                </div>
                                <div class="ibox-content">

                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-line-chart-moving"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="widget red-bg p-lg text-center">
                                <div class="m-b-md">
                                    <i class="fa fa-area-chart fa-4x"></i>
                                    <h1 class="m-xs">407 kw</h1>
                                    <h3 class="font-bold no-margins">
                                        ACTIVE ENERGY
                                    </h3>
                                    <small>Read more..</small>
                                </div>
                            </div>
                        </div>  
         
                        <div class="col-lg-2">
                            <div class="widget red-bg p-lg text-center">
                                <div class="m-b-md">
                                    <i class="fa fa-line-chart fa-4x"></i>
                                    <h1 class="m-xs">788 Kw</h1>
                                    <h3 class="font-bold no-margins">
                                        ACTIVE ENERGY
                                    </h3>
                                    <small>Read more..</small>
                                </div>
                            </div>
                        </div>    

                        <div class="col-lg-2">
                            <div class="widget red-bg p-lg text-center">
                                <div class="m-b-md">
                                    <i class="fa fa-bar-chart fa-4x"></i>
                                    <h1 class="m-xs">56 Tons</h1>
                                    <h3 class="font-bold no-margins">
                                        CO2 PRESERVED
                                    </h3>
                                    <small>Read more..</small>
                                </div>
                            </div>
                        </div>   

                    </div>
                    <!-- row -->


                </div>
                <!-- wrapper -->
          
     <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>


    <!-- Flot demo data -->
    <script src="js/demo/flot-demo.js"></script>
<?php include"include/footer.php"; ?>