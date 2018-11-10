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
                        <h2 class="text-danger">TROUBLESHOOTING</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active">
                                <strong>TROUBLESHOOTING</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>

        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <div class="ibox ">
                        <div class="ibox-content">
                            <i class="fa fa-circle text-navy"></i> PTR0 </a>
                            <ul class="folder-list m-b-md" style="padding: 0">
                                <li><a href="#"> <i class="fa fa-inbox "></i> Active power <span class="pull-right"><input type="checkbox" class="i-checks" checked></span> </a></li>
                                <li><a href="#"> <i class="fa fa-inbox "></i> Reactive power <span class="pull-right"><input type="checkbox" class="i-checks" ></span> </a></li>
                                <li><a href="#"> <i class="fa fa-inbox "></i> Voltage <span class="pull-right"><input type="checkbox" class="i-checks" ></span> </a></li>
                                <li><a href="#"> <i class="fa fa-inbox "></i> Frequency <span class="pull-right"><input type="checkbox" class="i-checks" ></span> </a></li>
                            </ul>
                            <ul class="category-list" style="padding: 0">
                                <li><a href="#"> <i class="fa fa-circle text-navy"></i> PTR1 </a></li>
                                <li><a href="#"> <i class="fa fa-circle text-danger"></i> PTR2</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-primary"></i> PTR3</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-info"></i> PTR4</a></li>
                                <li><a href="#"> <i class="fa fa-circle text-warning"></i> PTR5</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
      
                        <div class="col-lg-9">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5 class="text-success">Alarms, events and measurement </h5>
                                </div>
                                <div class="ibox-content">

                                        <script src="https://code.highcharts.com/highcharts.js"></script>
                                        <!-- <script src="https://code.highcharts.com/modules/series-label.js"></script> -->
                                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                                        <script src="https://code.highcharts.com/modules/export-data.js"></script>

                                        <div id="container" style="min-width: 310px; height: 300px; margin: 0 auto"></div>

                                </div>
                             <!-- ibox-content -->
 


                            </div>
                            <!-- ibox -->
                        </div>
                        <!-- col-lg-12 -->
                    </div>
                    <!-- row -->


            <div class="row">
                <div class="col-sm-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                             
                            <h2 class="text-primary">
                                Alarms on site.
                            </h2>
                            <div class="input-group">
                                <input type="text" placeholder="Search" class="input form-control">
                                <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                            <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-danger" style="font-size: 16px"> 1406 Alarms</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Alarms list</a></li>
                                <!-- <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> Companies</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                               <tr>
                                                    <td>1</td>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link"><?php echo date("d M Y H:i:s"); ?></a></td>
                                                    <td>PTR0</td>
                                                    <td class="client-status"><span class="label label-danger">detected</span></td>
                                                </tr>
                                                <?php for( $i=2; $i<=15; $i++){ ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link"><?php echo date("d M Y H:i:s"); ?></a></td>
                                                    <td>PTR<?php echo $i; ?></td>
                                                    <td class="client-status"><span class="label label-warning">Active</span></td>
                                                </tr>

                                                <?php } ?>
                                                <tr>
                                                    <td>16</td>
                                                    <td><a data-toggle="tab" href="#company-1" class="client-link"><?php echo date("d M Y H:i:s"); ?></a></td>
                                                    <td>PTR0</td>
                                                    <td class="client-status"><span class="label label-danger">detected</span></td>
                                                </tr>                                                
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
             
            </div>

                </div>
            <!-- wrapper -->
 


<script>
 
// Data retrieved from http://vikjavev.no/ver/index.php?spenn=2d&sluttid=16.06.2015.

Highcharts.chart('container', {
    chart: {
        type: 'spline',
        scrollablePlotArea: {
            minWidth: 400,
            scrollPositionX: 1
        }
    },
    credits: {
        text: 'SIMPLICITY',
        href: '#',
        position: {
            align: 'left',
            x: 15
        } 
              
    },
    title: {
        text: 'Measurements'
    },
    subtitle: {
        text: "<?php echo date("d M Y"); ?>"
    },
    xAxis: {
        type: 'datetime',
        labels: {
            overflow: 'justify'
        }
    },
    yAxis: {
        title: {
            text: ' '
        },
        minorGridLineWidth: 0,
        gridLineWidth: 0,
        alternateGridColor: null,
     
    },
    tooltip: {
        valueSuffix: ' '
    },
    plotOptions: {
        spline: {
            lineWidth: 2,
            states: {
                hover: {
                    lineWidth: 3
                }
            },
            marker: {
                enabled: false
            },
            pointInterval: 1800000, // one hour
            pointStart:    Date.UTC(2018, 10, 9, 0, 0, 0)
        }
    },
    series: [{
        name: 'OND1_1',
        data: [
            3.7, 3.3, 3.9, 5.1, 3.5, 3.8, 4.0, 5.0, 6.1, 3.7, 3.3, 6.4,
            6.9, 6.0, 6.8, 4.4, 4.0, 3.8, 5.0, 4.9, 9.2, 9.6, 9.5, 6.3,
            9.5, 10.8, 14.0, 11.5, 10.0, 10.2, 10.3, 9.4, 8.9, 10.6, 10.5, 11.1,
            10.4, 10.7, 11.3, 10.2, 9.6, 10.2, 11.1, 10.8, 13.0, 12.5, 12.5, 11.3,
            10.1
        ]

    }, {
        name: 'OND1_2',
        data: [
            0.2, 0.1, 0.1, 0.1, 0.3, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND1_3',
        data: [
            0.2, 0.1, 0.1, 0.1, 0.3, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND2_1',
        data: [
            0.2, 0.1, 0.1, 0.1, 0.3, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND2_2',
        data: [
            0.2, 0.1, 0.1, 0.1, 0.3, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND2_3',
        data: [
            0.2, 0.1, 0.1, 5, 5, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND3_1',
        data: [
            0.2, 0.1, 0.1, 1, 4, 4, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND3_2',
        data: [
            0.2, 0.1, 0.1, 3, 0.3, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }, {
        name: 'OND3_3',
        data: [
            0.2, 0.1, 4, 0.1, 0.3, 7, 8, 14, 12, 13, 15, 0.2,
            0.3, 0.1, 0.3, 0.4, 0.3, 0.2, 0.3, 0.2, 0.4, 0.0, 0.9, 0.3,
            0.7, 1.1, 1.8, 1.2, 1.4, 1.2, 0.9, 0.8, 0.9, 0.2, 0.4, 1.2,
            0.3, 2.3, 1.0, 0.7, 1.0, 0.8, 2.0, 1.2, 1.4, 3.7, 2.1, 2.0,
            1.5
        ]
    }

    ],
    navigation: {
        menuItemStyle: {
            fontSize: '10px'
        }
    }
});
</script> 

<?php include"include/footer.php"; ?>