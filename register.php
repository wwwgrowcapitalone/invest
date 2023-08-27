<?php include("db_connection.php");?>
<html>
   <head>
     <title></title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 
	 
  </head>
  <style type="text/css">
    .PAN
    {
        text-transform: uppercase;
    }
    .error
    {
        color: Red;
        visibility: hidden;
    }
	body {
    background-image: url(bg-img.jpeg);
    background-repeat: no-repeat;
    background-position: center top;
    background-size: 100% 100%;
}
</style>
  <body>
     <div class="container-fluid ">
         <div class="container">
		     <form action="#"  method="POST">
                 <div class="mb-3 mt-3">
                    <label for="Your Full Name" class="text-white">Username</label>
                    <input type="text" class="form-control" id="name" placeholder="Your Username" name="username">
                 </div>
                 <div class="mb-3">
                    <label for="phone" class="text-white">Phone No.</label>
                    <input type="text" class="form-control" id="tell" placeholder="Phone No." name="number">
                 </div>
				 <div class="mb-3 mt-3">
                    <label for="Email" class="text-white">Your Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Your Email." name="email">
                 </div>
				 <div class="mb-3 mt-3">
                    <label for="Email" class="text-white">password</label>
                    <input type="password" class="form-control" placeholder="Password" name="pwd" id="password">
                 </div>
				 <div class="mb-3 mt-3">
                    <label for="Email" class="text-white">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Confirm Password" name="cpwd" id="confirm_password">
                 </div>
                 <div class="mb-3">
                    <label for="AdhaarNo." class="text-white">Your Adhaar No.</label>
                    <input name="txtAdhaar" type="text" name="adhaar" id="txtAdhaar" class="form-control" placeholder="Your Adhaar No." />
                 </div>
				 <div class="mb-3">
				    <label for="Email" class="text-white">Your Pan No.</label><span id="lblPANCard" class="error">Invalid PAN Number</span>
                    <input name="txtPANCard" type="text" id="txtPANCard" class="PAN form-control" placeholder="Your Pan No." />
                 </div>
				 <div class="mb-3">
                    <label for="A/C No." class="text-white">Account No.</label>
                    <input type="number" class="form-control" id="Account No." placeholder="Your Account No." name="accountnumber">
                 </div>
                 <div class="mb-3">
                    <label for="IFSC code" class="text-white">Your IFSC Code</label>
                    <input type="txtnumber" class="form-control" id="IFSC code" placeholder="Your IFSC Code" name="ifsccode">
                 </div>
				 
				 <input type="submit" class="btn btn-primary" value="Register" name="register">
			 
			 </form>
        </div>
     </div>
 
  </body>
</html>


<?php 

   if($_POST['register'])
   {
	   $username = $_POST['username'];
	   $phone = $_POST['number'];
	   $email = $_POST['email'];
	   $pwd = $_POST['pwd'];
	   $cpwd = $_POST['cpwd'];
	   $accountnumber = $_POST['accountnumber'];
	   $ifsccode = $_POST['ifsccode'];
	   
	   $query = "INSERT INTO register_form_db values('$username','$phone','$email','$pwd',
	                                    '$cpwd','$accountnumber','$ifsccode')";
										
		$data = mysqli_query($connection,$query);

        if($data)
        {
			echo "Data Inserted into Database";
		}			
		else 
		{
			echo "Failed";
		}
		}
?>