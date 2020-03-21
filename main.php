<?php

	$server= "localhost";
	$user = "root";
	$password = "";
	$db = "omirzakov-portfolio";
	$table_name = "omirzakov-portfolio";

	$conn = mysqli_connect($server, $user, $password, $db);

	$checkConnect = false;

	$name_user = $_POST['name-user'];
	$number_user = $_POST['number-user'];
	$message_user = $_POST['message-user'];

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	elseif (strlen($name_user) > 0 && strlen($number_user) != 0) {
		$sql = "INSERT INTO message_user (id_user, name_user, number_user, message) VALUES (null, '$name_user', '$number_user', '$message_user')";

		$result = mysqli_query($conn, $sql);

		if ($result == true) {
			$checkConnect = true;
		}
		
		if ($result == false) {
			print("Произошла ошибка при выполнении запроса");
		}

	 }
	 else {
	 	echo "Ошибка 404";
	 } 	


	 mysqli_close($conn);
	 header("Location: http://localhost/portfolio/index.html");
?>
