<?php
	$db['dhost'] = "localhost";
	$db['dusername'] = "root";
	$db['dpassword'] = "";
	$db['dname'] = "db_test";

	foreach ($db as $key => $value) {
		define(strtoupper($key),$value);
	}
	$conn= mysqli_connect(DHOST,DUSERNAME,DPASSWORD,DNAME);