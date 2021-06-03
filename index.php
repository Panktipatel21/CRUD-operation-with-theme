<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
//connection function
$conn = mysqli_connect("localhost","root","","db_internship");


if($_POST){
	
	$st_name=$_POST['st_name'];
	$st_gender=$_POST['st_gender'];
	$st_dob=$_POST['st_dob'];
	$st_email=$_POST['st_email'];
	$st_mobile=$_POST['st_mobile'];
	$st_address=$_POST['st_address'];
	$st_city=$_POST['st_city'];
	$st_state=$_POST['st_state'];
	$st_pincode=$_POST['st_pincode'];
	$st_blodgroup=$_POST['st_blodgroup'];
	$st_password=$_POST['st_password'];

$q = mysqli_query($conn, "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_city,st_state,st_pincode,st_blodgroup,st_password) values('$st_name','$st_gender','$st_dob','$st_email','$st_mobile','$st_address','$st_city','$st_state','$st_pincode','$st_blodgroup','$st_password')" );
//or die("error".mysqli_error($conn));
	
	if($q)
	{
		echo "<script>alert('record added');</script>";
	}
	else
	print mysqli_error($conn);
}	
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/signup-img.jpg" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>student registration form</h2>
                        
						 <label for="name">Name:</label>
						 <input type="text"  name="st_name" /> 



<br><br>
<label for="st_gender">Gender:</label>
<select name= "st_gender">
<option>male</option>
<option>female</option>
</select> 



<br><br>
<label for="dob">Date Of Birth :</label>
<input type="text"  name="st_dob" /> 



<br><br>
<label for="st_email">Email Id:</label>
<input type="text"  name="st_email" /> 



<br><br>
<label for="st_mobile">Mobile no.:</label>
<input type="text"  name="st_mobile" />

<br><br>
<label for="st_address">Address:</label>
<textarea name="st_address">  </textarea> 

<br><br>
<label for="st_city">City:</label>
<input type ="text" name="st_city" /> 

<br><br>
<label for="st_state">State:</label>
<select name= "st_state">
<option>gujrat</option>
<option>up</option>
<option>mp</option>
<option>zarkhand</option>
</select> 


<br><br>
 <label for="st_pincode">Pincode:</label>
 <input type="text"  name="st_pincode" />


 
<br><br>
<label for="st_blodgroup">Blodgroup:</label>
 <input type="text"  name="st_blodgroup" /> 



<br><br>
<label for="st_password">Password:</label>
<input type="text"  name="st_password" /> 



						<div class="form-submit">
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
						
						<?php echo "<a href='studenttable.php'><h2> show record</h2></a>";?>
						</div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>