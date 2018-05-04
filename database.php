<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","","noq");

if(!$conn){
    die(mysqli_connect_error());
}

else{
      $email_id = $_POST['form-username'];
      $query = "INSERT INTO customers VALUES('','$email_id');";
      if(mysqli_query($conn, $query)){
		  echo "login successful";
                  session_start();
                  $_SESSION[$email_id] = session_id();
                  header("location:noq_menu.php");
	  }
	  else{
		  echo "Error";
	  }
}

mysqli_close($conn);
?>
</body>
</html>