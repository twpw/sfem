<?php 
    include 'Employee.php';
    $employeeObj = new Employee();

	if (isset($_POST['action'])) {

		if ($_POST['action'] == 'delete') {
			$deleteId = $_POST['deleteId'];
			$deleteImg = $_POST['deleteImg'];
			if (!empty($deleteId)) {
				$sql = "DELETE FROM tbl_employee WHERE id='$deleteId'";
				$employeeObj->query_execute($sql);
				unlink('upload/'.$deleteImg);
				echo 'deleted';
			}
		}
		if ($_POST['action'] == 'update') {
			$image = '';
			$id = $_POST['id'];
			$uploaded_image = $_POST['uploaded_image'];
			if ($_FILES['image']['name'] !='') {
				$image = $employeeObj->upload($_FILES['image']);
				unlink('upload/'.$uploaded_image);
			}else{
				$image =$uploaded_image;
			}
			$name = mysqli_real_escape_string($employeeObj->connect,$_POST['name']);
			$salary = mysqli_real_escape_string($employeeObj->connect,$_POST['salary']);
			$sex = mysqli_real_escape_string($employeeObj->connect,$_POST['sex']);

			$sql = "UPDATE tbl_employee SET name='".$name."',salary='".$salary."',sex='".$sex."',image='".$image."' WHERE id ='$id'";

			$employeeObj->query_execute($sql);
			echo 'updated';
		
		}
		if ($_POST['action'] =='fetchSingle') {
			$output = '';
			$editId = $_POST['editId'];

			$sql = "SELECT * FROM  tbl_employee WHERE id='$editId'";
			$data  = $employeeObj->query_execute($sql);
			while ($row  = $data->fetch_assoc()) {
				$output['name'] = $row['name'];
				$output['salary'] = $row['salary'];
				$output['sex'] = $row['sex'];
				$output['image'] = $row['image'];
				$output['uploaded_hidden_image'] = '<img width="70px" height="70px" src="upload/'.$row['image'].'">';

			}
			echo json_encode($output);

		}
		if ($_POST['action'] =='load') {
			// Load data
			$output = '';
			$sql = "SELECT * FROM tbl_employee ORDER BY id DESC";
			$data = $employeeObj->query_execute($sql);
			$output .= '<tr>
			<th>Employee Picture</th>
			<th>Employee Name</th>
			<th>Employee Salary</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>';
			while ($row = $data->fetch_assoc()) {
				$output .= '<tr>
			<td><img width="40px" height="40px" src="upload/'.$row['image'].'"></td>
			<td>'.$row['name'].'</td>
			<td>'.$row['salary'].' </td>
			<td><button type="button" class="btn btn-success" id="edit" data-editId="'.$row['id'].'">Edit</button></td>
			<td><button type="button" class="btn btn-danger" id="delete" data-deleteId="'.$row['id'].'" data-deleteImg="'.$row['image'].'">Delete</button></td>
		</tr>';
			}

			echo $output;
			

		}
		if ($_POST['action'] == 'create') {
			// Do Somthing.......
			$image = '';
			$name = mysqli_real_escape_string($employeeObj->connect,$_POST['name']);
			$salary = mysqli_real_escape_string($employeeObj->connect,$_POST['salary']);
			$sex = mysqli_real_escape_string($employeeObj->connect,$_POST['sex']);
			if ($_FILES['image']['name'] != '') {
				$image = $employeeObj->upload($_FILES['image']);
			}else{
				$image = '';
			}
			$sql = "INSERT INTO tbl_employee(name,salary,sex,image) VALUES('".$name."','".$salary."','".$sex."','".$image."')";
			$employeeObj->query_execute($sql);
			echo 'created';


		}
	}

?>