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
                        <h2 class="text-danger">อยู่ระหว่างดำเนินการ</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active">
                                <strong>อยู่ระหว่างดำเนินการ</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>

             <div class="wrapper wrapper-content">
                <div class="middle-box text-center animated fadeInRightBig">
                    <h3 class="font-bold" style="font-size: 35px">อยู่ระหว่างดำเนินการ</h3>
                    <div class="error-desc" style="font-size: 28px">
                        กรุณากลับมาตรวจสอบใหม่ <br>ระบบจะเสร็จในไม่ช้า.
                    </div>
                </div>
            </div>
 
 
<?php include"include/footer.php"; ?>