<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
    <script>
        window.open('/index.php');
    </script>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "temp");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$strength = $_REQUEST['strength'];
		$present = $_REQUEST['present'];
		$plates = $_REQUEST['plates'];
		$menu = $_REQUEST['menu'];
		$tastingIncharge = $_REQUEST['tastingIncharge'];
		$remark = $_REQUEST['remark'];
		$holiday = $_REQUEST['holiday'];
		$reason = $_REQUEST['reason'];
		$city = $_REQUEST['city'];
		$state = $_REQUEST['state'];
		$zip = $_REQUEST['zip'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO mainform VALUES ('$email',
			'$password', '$strength', '$present', '$plates', '$menu', '$tastingIncharge', '$remark', '$holiday', '$reason', 
            '$city', '$state', '$zip')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("$email\n$password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
