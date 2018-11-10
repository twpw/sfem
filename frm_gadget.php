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
                        <h2 class="text-danger">ข้อมูลอุปกรณ์</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">หน้าหลัก</a>
                            </li>
                            <li class="active">
                                <strong>ข้อมูลอุปกรณ์</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-4">

                    </div>
                </div>




                <div class="wrapper wrapper-content  animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>ข้อมูลอุปกรณ์</h5>
                                </div>
                                <div class="ibox-content">

                                    <button type="button" class="btn btn-primary" id="create_update_acc_btn" data-toggle="modal" data-target="#create_update_form_modal">เพิ่มอุปกรณ์</button>
                                    <p>&nbsp;</p>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover dataTables-example" id="employee_list">
 
                                        </table>
                                    </div>
                                </div>
                                     

                                    <!-- Modal -->
                                    <div class="modal inmodal fade" id="create_update_form_modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header pmd-modal-bordered">
                                                     <button class="close" data-dismiss="modal" type="button">&times;</button>
                                                     <h2 id="form-title"></h2>
                                                </div>
                                                <form class="form-horizontal" id="create_update_form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <div class="form-group pmd-textfield pmd-text-field-floating-label">
                                                            <label for="gadget_name" class="control-label">ชื่ออุปกรณ์</label>
                                                            <input type="text" class="form-control" name="gadget_name" id="gadget_name">
                                                        </div>
                                                        <div class="form-group pmd-textfield pmd-text-field-floating-label">
                                                            <label for="gadget_address" class="control-label">Address</label>
                                                            <input type="text" class="form-control" name="gadget_address" id="gadget_address">
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="image" class="control-label">รูป</label>
                                                            <input type="file" class="form-control" name="image" id="image">
                                                            <span id="uploaded_hidden_image"></span>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="hidden" id="id" name="id">
                                                        <input type="hidden" id="uploaded_image" name="uploaded_image">
                                                        <input type="hidden"  name="action" id="action" value="create">
                                                        <input type="submit"  name="submit" id="submit" class="btn btn-success" value="Add Employee">
                                                        <button data-dismiss="modal" class="btn btn-default">Cancle</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal -->


                            </div>
                            <!-- ibox -->
                        </div>
                        <!-- col-lg-12 -->
                    </div>
                    <!-- row -->
                </div>
            <!-- wrapper -->
 <!-- JS  files-->
                                    <script src="js/jquery-3.1.1.min.js"></script>

                                    <script src="js/plugins/sweetalert/sweetalert2.min.js"></script>


                                    <script type="text/javascript">
                                        $(document).ready(function(){

                                            $(document).on("click","#delete",function(e){
                                                e.preventDefault();
                                                swal({
                                                    title:"ต้องการลบข้อมูล ?",
                                                    icon:"warning",
                                                    buttons:true,
                                                    dangerMode:true,
                                                }).then((willDelete)=>{
                                                    if (willDelete) {
                                                var deleteId = $(this).attr('data-deleteId');
                                                var deleteImg = $(this).attr('data-deleteImg');
                                                var action = 'delete';
                                                $.ajax({
                                                    url:"action.php",
                                                    method:"POST",
                                                    data:{deleteId:deleteId,deleteImg:deleteImg,action:action},
                                                    success:function(data){
                                                        if (data.trim() == 'deleted') {
                                                            swal({
                                                                title:"ลบข้อมูลเรียบร้อย",
                                                                icon:"success"
                                                            });
                                                            
                                                        }
                                                        employee_list();
                                                    }
                                                });
                                                    }else{
                                                        return false;
                                                    }
                                                });
                                            

                                            });
                                            $(document).on("click","#create_update_acc_btn",function(e){
                                                e.preventDefault();
                                                $("#create_update_form")[0].reset();
                                                $("#uploaded_hidden_image").html('');
                                                $("#action").val('create');
                                                $("#submit").val('Save');
                                                $("#form-title").text('เพิ่มข้อมูลอุปกรณ์');
                                            });
                                            // Fetch Data
                                            $(document).on("click","#edit",function(e){

                                                e.preventDefault();
                                                var action ="fetchSingle";
                                                var editId = $(this).attr("data-editId");

                                                $.ajax({
                                                    url:"action.php",
                                                    method:"POST",
                                                    data:{action:action,editId:editId},
                                                    dataType:"json",
                                                    success:function(data){
                                                         $("#create_update_form_modal").modal('show');
                                                         $("#gadget_name").val(data.gadget_name);
                                                         $("#gadget_address").val(data.gadget_address);
                                                         $("#uploaded_image").val(data.image);
                                                         $("#id").val(editId);
                                                         $("#uploaded_hidden_image").html(data.uploaded_hidden_image);
                                                         $("#action").val('update');
                                                         $("#submit").val('update');
                                                         $("#form-title").text('แก้ไขข้อมูลอุปกรณ์');

                                                    }
                                                })
                                            });

                                            // Get Employee Information
                                            employee_list();
                                            function employee_list(){
                                                var action = 'load';
                                                $.ajax({
                                                    url:"action.php",
                                                    method:"POST",
                                                    data:{action:action},
                                                    success:function(data){
                                                        $("#employee_list").html(data);
                                                    }
                                                })
                                            }
                                            $(document).on("submit","#create_update_form",function(e){
                                                e.preventDefault();
                                                var gadget_name = $("#gadget_name").val();
                                                var gadget_address = $("#gadget_address").val();
                                                var image = $("#image").val();
                                                var imageExtention = $("#image").val().split('.').pop().toLowerCase();
                                                if (imageExtention != '') {
                                                    if (jQuery.inArray(imageExtention,['gif','png','jpeg','jpg']) == -1) {
                                                        swal({
                                                            title:"Picture Invalid",
                                                            icon:"warning"
                                                        });
                                                        $("#image").val('');
                                                        return false;
                                                    }
                                                }
                                                if (gadget_name == '') {
                                                    swal({
                                                            title:"กรุณากรอกข้อมูลชื่ออุปกรณ์",
                                                            icon:"warning"
                                                        });
                                                }else if(gadget_address == ''){
                                                    swal({
                                                            title:"กรุณากรอกข้อมูล Address",
                                                            icon:"warning"
                                                        });
                                                }else{
                                                    $.ajax({
                                                        url:"action.php",
                                                        method:"POST",
                                                        data: new FormData(this),
                                                        contentType:false,
                                                        processData:false,
                                                        success:function(data){
                                                            $("#create_update_form")[0].reset();
                                                            if (data.trim() == 'created') {
                                                                swal({
                                                                    title:"เพิ่มข้อมูลเรียบร้อย",
                                                                    icon:"success"
                                                                });
                                                            }
                                                                if (data.trim() == 'updated') {
                                                                swal({
                                                                    title:"แก้ไขข้อมูลเรียบร้อย",
                                                                    icon:"success"
                                                                });
                                                            }
                                                            $("#create_update_form_modal").modal('hide');
                                                            employee_list();
                                                        }

                                                    });
                                                }
                                            
                                            });
                                        });
                                    </script>

 
<?php include"include/footer.php"; ?>