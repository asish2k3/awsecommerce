<?php  


if($_POST['name'] and $_POST['email'] and $_POST['subject'] and $_POST['message']) {
	include 'db_conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email']);
	$subject = validate($_POST['subject']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: index.html");
	}else {

		$sql = "INSERT INTO test1(name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
			echo "Your message was sent successfully!";
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: index.html");
}
