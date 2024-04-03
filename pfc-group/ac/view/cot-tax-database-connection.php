 <?php
	//This are my database constants
	define("DB_SERVER","localhost");
	define("DB_USER","u722558539_pfcuser");
	define("DB_NAME","u722558539_pfcdb");
	define("DB_PASS","123Pass!1000");
	$conn=mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
	if(!$conn){
	  #echo "<h1>Server connection is successful!</h1><br>";
	}
	$db=mysqli_select_db($conn,DB_NAME);
	 if(!$db){
	   echo '<meta content=0.000001;conn-error.php http-equiv="refresh" />';
	}
	
                                                    
?>


