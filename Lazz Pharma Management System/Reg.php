<!DOCTYPE html>
<html>
<head>
<title>Lazz Pharma Management System</title>
<link rel="stylesheet" href="reg.css"></link>
<style>
#cd{
 background-color:navy;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24)
 }
 #cd a{
 float:right;
 display:block;
 color:white;
 text-align:center;
 padding:18px 16px;
 text-decoration:none;
 opacity: 0.8;
 transition: 0.8s;
 cursor: pointer;
 }
 #cd a:hover
 { opacity: 1;
 background-color:red;
 color:white;}
}
</style>
</head>
<body>

  <?php
include 'dbReg.php';
$emailErr = $passwordErr = "";  
$email = $password = "";  
$successfulMessage = $errorMessage = "";
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {  



    if (empty($_POST["email"])) 
    {  
        $emailErr = " Please fill the gap";
        $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $passwordErr = " Please fill the gap";
       $flag = True;  
    } 
    
    if(!$flag) 
    {
      $email = input_data($_POST["email"]);
      $password = input_data($_POST["password"]);

        $res = reg($email, $password);
        if($res) {
        $errorMessage = "successfully Registerd.";
        }
        else {
        $errorMessage = "Error Found.";
        }
    }
}
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?> 

<br><br><br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="reg" >
  <h1 style="text-align: center;">Registration form</h1>
  
  <fieldset>
    <legend><h3>Personal Information</h3></legend>
    
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <?php echo $emailErr; ?>  <br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password"><br>
    <?php echo $passwordErr; ?>  
    <br><br><input type="submit" value="Register" id="subb"><br>
    <h4 style="color:green;">Already have an account?</h4>
                <a href="Login.php">Back To Login</a>
  </fieldset>
  
</form>
 <br>
 <?php echo "<b>".$errorMessage."</b>"; ?>
</body>
</html>