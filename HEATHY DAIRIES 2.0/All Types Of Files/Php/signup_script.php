<?php
	$host	= "host=localhost";
	$port	= "port=5432";
	$dbname = "dbname=testdb";
	$credentials = "user = postgres password=username";

	$db = pg_connect("$host $port $dbname $credentials" );
	if (!$db) {
		echo "Error: Unable to conect to the database";
	}else {
		$first_name = $_POST["first-name"]." ".$_POST["last-name"];
		// $last_name = ;
		$dob = $_POST["dob"];
		$mobile_number = $_POST["mobile-number"];
		$email_id = $_POST["email-id"];
		$address = $_POST["address"];
		
 		$sql ="insert into login values($mobile_number, '$first_name', '$dob' , '$email_id', '$address');";

		 $ret = pg_query($db, $sql);
   		 if(!$ret) {
      			echo pg_last_error($db);
         exit;
   		}
		pg_close($db);
	}

?>