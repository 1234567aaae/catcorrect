<?php
session_start();
require_once "conn.php";


$sql = "SELECT name, username, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_session["fname"]=$row["name"];
    $_session["lname"]= $row["username"]; 
    $_session["email"]=$row["email"];
    
  }
} else {
  echo "0 results";
}
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>www.irembo.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="d-flex justify-content-center py5" style="background:#000;">
        <h5 class="text-white">IREMBO | Special CAT</h5>
    </div>
    <div class="container">
    	<div class="row d-flex justify-content-center align-items-center" style="height:70vh;">
        
			<div class="col-sm-12 col-md-4 m-auto">
            <center><img src="image/vainqueur.JFIF" class="rounded-circle mx-2" alt="profile image" width="100" height="100" srcset=""> <center>
				<div class="border p-5 mb-5">
					<form action="logout.php" method="post">
					
						<div class="form-group">

                        </div>
						
                        <div class="form-group" style="height:15vh">
							
							<strong>welcome 
                                <?php print  $_session["fname"]; ?> 
                            <br>
                            <?php echo  $_session["email"]; ?> 
                            
                         </strong>

						</div>

                        <button type="submit" class="bg-dark text-center form-control border-0 text-light" style="border-radius:50px 50px 50px 50px;">
                    logout
                </button>
					</form>
				</div>
			</div>
		</div>
    </div> 
    
    

	





