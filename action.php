
<?php //header('Content-Type: application/json');
    include 'Employee.php';
    $employeeObj = new Employee();

	if (isset($_POST['action'])) {

		if ($_POST['action'] == 'delete') {
			$deleteId = $_POST['deleteId'];
			$deleteImg = $_POST['deleteImg'];
			if (!empty($deleteId)) {
				$sql = "DELETE FROM gadget WHERE id='$deleteId'";
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
			$gadget_name = mysqli_real_escape_string($employeeObj->connect,$_POST['gadget_name']);
			$gadget_address = mysqli_real_escape_string($employeeObj->connect,$_POST['gadget_address']);

			$sql = "UPDATE gadget SET 
			gadget_name='".$gadget_name."',
			gadget_address='".$gadget_address."',
			image='".$image."',
			date_update = CURDATE(),
			time_update = '".date("H:i:s")."'
			WHERE id ='$id'";

			$employeeObj->query_execute($sql);
			echo 'updated';
		
		}
		if ($_POST['action'] =='fetchSingle') {
			$output = '';
			$editId = $_POST['editId'];

			$sql = "SELECT * FROM  gadget WHERE id='$editId'";
			$data  = $employeeObj->query_execute($sql);
			while ($row  = $data->fetch_assoc()) {
				$output['gadget_name'] = $row['gadget_name'];
				$output['gadget_address'] = $row['gadget_address'];
				$output['image'] = $row['image'];
				$output['uploaded_hidden_image'] = '<br><img width="90px" height="90px" class="img-fluid img-thumbnail" src="upload/'.$row['image'].'">';

			}
			echo json_encode($output);

		}
		if ($_POST['action'] =='load') {
			// Load data
			$output = '';
			$sql = "SELECT * FROM gadget ORDER BY id DESC";
			$data = $employeeObj->query_execute($sql);
			$output .= '<thead>
                    <tr>
                        <th> ลำดับ </th>
                        <th> รูป </th>
                        <th> ชื่อ </th>
                        <th> Address </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>
                    </thead><tbody>';
                    $i = 1;
			while ($row = $data->fetch_assoc()) {
				$output .= '<tr>
					<td width="10">'.$i.'</td>
					<td><img width="40px" height="40px" src="upload/'.$row['image'].'" class="img-fluid img-thumbnail"></td>
					<td>'.$row['gadget_name'].'</td>
					<td>'.$row['gadget_address'].' </td>
					<td width="10"><button type="button" class="btn btn-success" id="edit" data-editId="'.$row['id'].'">Edit</button></td>
					<td width="10"><button type="button" class="btn btn-danger" id="delete" data-deleteId="'.$row['id'].'" data-deleteImg="'.$row['image'].'">Delete</button></td>
				</tr>';
				$i++;
			}
			echo '</tbody>';
 

			echo $output;
			

		}
		if ($_POST['action'] == 'create') {
			// Do Somthing.......
			$image = '';
			$gadget_name = mysqli_real_escape_string($employeeObj->connect,$_POST['gadget_name']);
			$gadget_address = mysqli_real_escape_string($employeeObj->connect,$_POST['gadget_address']);

			if ($_FILES['image']['name'] != '') {
				$image = $employeeObj->upload($_FILES['image']);
			}else{
				$image = '';
			}
			$sql = "INSERT INTO gadget SET 
			gadget_name = '".$gadget_name."',
			gadget_address = '".$gadget_address."',
			image = '".$image."',
			date_update = CURDATE(),
			time_update = '".date("H:i:s")."' ";
			$employeeObj->query_execute($sql);
			echo 'created';


		}
	}

 
?>


  