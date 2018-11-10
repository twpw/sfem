<?php include"include/header.php"; ?>
<?php include"include/sidebar.php"; ?>

    


            

            <?php include"include/navbar.php"; ?>

                <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>ข้อมูลอุปกรณ์</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="./">หน้าหลัก</a>
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
                        <div class="col-lg-6">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>ข้อมูลอุปกรณ์</h5>
                                </div>
                                <div class="ibox-content">

                                    <form class="form-horizontal" id="form" enctype="multipart/form-data" method="post" action="process_gadget.php">
                                            <div class="form-group"><label class="col-lg-4 control-label">ชื่ออุปกรณ์</label>
                                                <div class="col-lg-8"><input type="text" placeholder="ชื่ออุปกรณ์" class="form-control" id="gadget_name"  name="gadget_name" required>
                                                </div>
                                            </div>

                                            <div class="form-group"><label class="col-lg-4 control-label">Address</label>
                                                <div class="col-lg-8"><input type="text" placeholder="Address" class="form-control" id="gadget_address" name="gadget_address"></div>
                                            </div>

                                             
                                            
                                            <div class="form-group"><label class="col-lg-4 control-label">รูปภาพ</label>
                                            <div class="col-lg-8">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput">
                                                    <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span>
                                                </div>
                                                <span class="input-group-addon btn btn-default btn-file">
                                                    <span class="fileinput-new">Select file</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="gadget_picture" id="gadget_picture" />
                                                </span>
                                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div> 
                                            </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-offset-4 col-lg-8">
                                                    <div class="i-checks"><label> <input type="checkbox"><i></i> Remember me </label></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-offset-4 col-lg-8">
                                                      <button class="btn btn-sm btn-primary m-t-n-xs" type="submit" id="btnSubmit" name="btnSubmit"><strong>บันทึก</strong></button>
                                                      <button class="btn btn-sm btn-white m-t-n-xs" type="reset">Reset</button>
                                                </div>
                                            </div>
                                    </form>   
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-6">
                            <div class="ibox ">
                                <div class="ibox-title">
                                    <h5>Methods</h5>
                                </div>
                                <div class="ibox-content">
                                    <h2>
                                        List of built-in Validation methods
                                    </h2>
                                    <p>
                                        A set of standard validation methods is provided:
                                    </p>

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Method</th>
                                            <th>Description</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>remote</td>
                                            <td>Requests a resource to check the element for validity.</td>
                                        </tr>
                                        <tr>
                                            <td>minlength</td>
                                            <td>Makes the element require a given minimum length.</td>
                                        </tr>
                                        <tr>
                                            <td>   maxlength</td>
                                            <td>Makes the element require a given maxmimum length.</td>
                                        </tr>
                                        <tr>
                                            <td> rangelength</td>
                                            <td> Makes the element require a given value range.</td>
                                        </tr>
                                        <tr>
                                            <td>  min</td>
                                            <td>  Makes the element require a given minimum.</td>
                                        </tr>
                                        <tr>
                                            <td>   max</td>
                                            <td> Makes the element require a given maximum.</td>
                                        </tr>
                                        <tr>
                                            <td> range</td>
                                            <td> Makes the element require a given value range.</td>
                                        </tr>
                                        <tr>
                                            <td> email</td>
                                            <td> Makes the element require a valid email</td>
                                        </tr>
                                        <tr>
                                            <td>  url</td>
                                            <td>  Makes the element require a valid url</td>
                                        </tr>
                                        <tr>
                                            <td>   date</td>
                                            <td> Makes the element require a date.</td>
                                        </tr>
                                        <tr>
                                            <td> dateISO</td>
                                            <td> Makes the element require an ISO date.</td>
                                        </tr>
                                        <tr>
                                            <td> number</td>
                                            <td> Makes the element require a decimal number.</td>
                                        </tr>
                                        <tr>
                                            <td> digits</td>
                                            <td>  Makes the element require digits only.</td>
                                        </tr>
                                        <tr>
                                            <td> creditcard</td>
                                            <td> Makes the element require a credit card number.</td>
                                        </tr>
                                        <tr>
                                            <td> equalTo</td>
                                            <td> Requires the element to be the same as another one</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>

                              
<!-- <script type="text/javascript">
        $(document).ready(function() {
            
            $("#btnSubmit").click(function() {
 
                    $.ajax({
                       type: "POST",
                       url: "ajax/gadget.php",
                       data: $("#form").serialize(),
                       success: function(result) {
                            if(result.status == 1) // Success
                            {
                                alert(result.message); 
                                $("#form")[0].reset();    
                                //window.location.replace("form_gadget.php");
                            }
                            else // Err
                            {
                                alert(result.message);
                            }
                       }
                     });ชื่ออุปกรณ์

            });
    
        });
</script> -->

 
<?php include"include/footer.php"; ?>