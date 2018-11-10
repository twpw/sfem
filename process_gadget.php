<?php include"include/header.php"; ?>
<?php include"include/sidebar.php"; ?>
    <!-- Sweet alert -->
  
 


<?php
	// header('Content-Type: application/json');
	error_reporting(0);

	include"include/connect.php";
 
	 if(trim($_FILES["gadget_picture"]["tmp_name"]) != "")
		{

			$Str_file = explode(".",$_FILES['gadget_picture']['name']);  // แยกชื่อไฟล์ด้วย "." ค่าที่ได้จะเป็น Array ครับ

			$new_name=date("YmdHis.").$Str_file['1'];

			$images = $_FILES["gadget_picture"]["tmp_name"];
			$new_images = "Thumbnails_".$new_name;
			move_uploaded_file($_FILES["gadget_picture"]["tmp_name"],"MyResize/".$new_name);
			$width=200; //*** Fix Width & Heigh (Autu caculate) ***//
			$size=GetimageSize($images);
			$height=round($width*$size[1]/$size[0]);
			$images_orig = ImageCreateFromJPEG($images);
			$photoX = ImagesX($images_orig);
			$photoY = ImagesY($images_orig);
			$images_fin = ImageCreateTrueColor($width, $height);
			ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
			ImageJPEG($images_fin,"MyResize/".$new_name);
			ImageDestroy($images_orig);
			ImageDestroy($images_fin);
		}

 
	$sql = "INSERT INTO gadget SET 
	gadget_name = '".$_POST["gadget_name"]."',
	gadget_picture = '".$new_name."',
	gadget_address = '".$_POST["gadget_address"]."',
	date_update = CURDATE(),
	time_update = '".date("H:i:s")."'
	";

 
  

	$excute = $mysqli->query($sql);
 
	if($excute) {?>
 	<script>
		 
			swal({
			  title: "บันทึกข้อมูลเรียบร้อย",
			  text: "You clicked the button!",
			  icon: "success",
			  button: "OK",
			},

		    function(){
			window.location.href = 'form_gadget.php';
		    });


		</script>

	<?php	 
		//echo json_encode(array('status' => '1','message'=> 'successfully'));
	}
	else
	{
		echo "error";
		//echo json_encode(array('status' => '0','message'=> 'Error !'));
	}

	
 
 
	$mysqli->close();
?>

 
<?php include"include/footer.php"; ?>