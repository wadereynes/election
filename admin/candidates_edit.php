<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		$status = $_POST['status'];
		// $platform = $_POST['platform'];

		$sql = "UPDATE candidates SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', status = '$status', position_id = '$position' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: candidates.php');

?>
