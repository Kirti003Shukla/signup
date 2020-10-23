<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'dbserver.php';
if(isset($_POST['register'])){
    $name= mysqli_real_escape_string($conn, $_POST['name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $query=mysqli_query($conn,"INSERT into register (name,email,password,active) values('$name','$email','$password',1)");
            $count = mysqli_affected_rows($conn); 
    $subject = "Details";        
   $txt = "Hi, the details which you shared with us are $name, $email, $password. ";  
   $headers = "From:info@rkpump.com";
$mail= mail($email,$subject,$txt,$headers);
        if($count == 1){  
            echo "<script>alert('Thank you for the submission!');</script>";
            

        }  
        else{  
            echo "<script>alert('Registration failed')</script>";  
        }     

}
?>
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Register</title>
            <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <style>
           
.page-content {
	width: 50%;
	margin:  0 auto;
background-color:#E1EBEE;
border-radius:50px;
}
.form-row{	
    margin: 20px;
}
body{	
            background-image:url('https://www.nlsproperties.co.za/images/slides/slide-02.jpg');

  background-repeat: no-repeat;
}
.text-center{color:white;}
        </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--        // validation for empty field   -->
   
<style>
    </style>
    </head>
    <body>
            <div class="container">
           <h1 class="text-center">Registration Form</h1>
          <div class="container page-content">

              <br>
        <form class="form-detail" name="f1" action ="register.php"    method = "POST">
            <div class="form-row">
            <input type="text" id ="username" name="name" class="form-control input-text" required placeholder="Name">
            </div>
            <div class="form-row">
            <input type="email" id ="useremail" name="email" class="form-control input-text" required placeholder="Email"> 
            </div>
            <div class="form-row">
            <input type="password" id ="userpass" name="password" class="form-control input-text" required placeholder="Pasword"> 
            </div>      
            <div class="form-row">
            <input type="submit" value="Register" name="register" class="form-control btn btn-primary">
            </div>

        </form>
              <br>
          </div>
            </div>
        

    </body>
</html>
