<?php 
	include 'employee.php';
	$employeeObj = new Employee();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP OOP AJAX CRUD using MYSQLI with Bootstrap & Propeller Modal (part-4 Delete)</title>
<!-- css files-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="http://icttask.com/demo/lib/propeller.min.css">
<link rel="stylesheet" type="text/css" href="http://icttask.com/demo/lib/main.css">
</head>
<body>
<div class="wrapper pmd-z-depth ">
	<h2 style="text-align: center;padding: 12px;font-weight: bold;">PHP OOP AJAX CRUD using MYSQLI with Bootstrap & Propeller Modal (part-4 Delete)</h2>
<button type="button" class="btn btn-primary" id="create_update_acc_btn" data-toggle="modal" data-target="#create_update_form_modal">Create Employee Account</button>
	<div class="pmd-cart pmd-z-depth" style="margin-top: 15px">
	<div class="table-responsive">
		<table class="table pmd-table" id="employee_list">
		
		
		
		</table>
	</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="create_update_form_modal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header pmd-modal-bordered">
	 <button class="close" data-dismiss="modal" type="button">&times;</button>
	 <h2 class="pmd-cart-title-text" id="form-title">Create Employee  Account</h2>
</div>
<form class="form-horizontal" id="create_update_form">
	<div class="modal-body">
		<div class="form-group pmd-textfield pmd-text-field-floating-label">
			<label for="user name" class="control-label">Employee  Name</label>
			<input type="text" class="form-control" name="name" id="name">
		</div>
		<div class="form-group pmd-textfield pmd-text-field-floating-label">
			<label for="user name" class="control-label">Employee salary</label>
			<input type="text" class="form-control" name="salary" id="salary">
		</div>
		<div class="form-group pmd-textfield pmd-text-field-floating-label">
			<label for="sex" class="control-label">Select a sex</label>
			<select class="select-simple form-control pmd-select2" name="sex" id="sex">
				<option></option>
				<option value="1">Male</option>
				<option value="2">Fmale</option>
				<option value="3">Others</option>
			</select>
		</div>
		<div class="form-group ">
			<label for="image" class="control-label">Employee Picture</label>
			<input type="file" class="form-control" name="image" id="image">
			<span id="uploaded_hidden_image"></span>
		</div>
	</div>
	<div class="pmd-modal-action">
		<input type="hidden" id="id"  name="id">
		<input type="hidden" id="uploaded_image" name="uploaded_image">
		<input type="hidden"  name="action" id="action" value="create">
		<input type="submit"  name="submit" id="submit" class="btn btn-success" value="Add Employee">
		<button data-dismiss="modal" class="btn btn-default">Cancle</button>
	</div>
</form>
</div>
</div>
</div>
<!-- JS  files-->
<script src="http://icttask.com/demo/lib/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://icttask.com/demo/lib/propeller.min.js"></script>
<script type="text/javascript" src="http://icttask.com/demo/lib/sweetalert.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$(document).on("click","#delete",function(e){
			e.preventDefault();
			swal({
				title:"Are you Sure Delete?",
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
							title:"Employee Account Deleted successfull",
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
			$("#submit").val('Create account');
			$("#form-title").text('Create Employee  Account');
		});
		// Fetch Data
		$(document).on("click","#edit",function(e){
			e.preventDefault();
			var action ='fetchSingle';
			var editId = $(this).attr('data-editId');
			

			$.ajax({
				url:"action.php",
				method:"POST",
				data:{action:action,editId:editId},
				dataType:"json",
				success:function(data){
					$("#create_update_form_modal").modal('show');
					$("#name").val(data.name);
					 $("#salary").val(data.salary);
					 $("#sex").val(data.sex);
					 $("#uploaded_image").val(data.image);
					 $("#id").val(editId);
					 $("#uploaded_hidden_image").html(data.uploaded_hidden_image);
					 $("#action").val('update');
					 $("#submit").val('update account');
					 $("#form-title").text('update employee account');

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
			var name = $("#name").val();
			var salary = $("#salary").val();
			var sex = $("#sex").val();
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
			if (name == '') {
				swal({
						title:"Name Field Required",
						icon:"warning"
					});
			}else if(salary == ''){
				swal({
						title:"Salary Field Required",
						icon:"warning"
					});
			}else if(sex == ''){
				swal({
						title:"Sex Field Required",
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
								title:"Employee Account created successfull",
								icon:"success"
							});
						}
							if (data.trim() == 'updated') {
							swal({
								title:"Employee Account updated successfull",
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
</body>

</html>