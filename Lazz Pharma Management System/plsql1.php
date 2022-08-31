<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lazz Pharma Management System</title>
<link rel="stylesheet" href="table.css"></link>
<style>
body {
  margin: 0;
}
#cd{
 background-color:navy;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24)
 }
 #top{
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
 #top:hover
 { opacity: 1;
 background-color:red;
 color:white;
 }
#ulist {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: absolute;
  height: 320%;
  overflow: auto;
}

#list #hrf {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

#list #hrf.active {
  background-color: #04AA6D;
  color: white;
}

#list #hrf:hover:not(.active) {
  background-color: #555;
  color: white;
}


.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  background-color: #f1f1f1;
}

</style>
</head>
<body>
<?php
$inputErr = "";  
$input = ""; 
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["input"])) 
    {  
        $inputErr = " Fill the blank"; 
        $flag = True;
    } 
    if(!$flag) 
    {
    $input = testdata($_POST["input"]);

  }
 }
function testdata($data) {  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
?>
<?php
include 'dbplsql.php';
?>
<div id="cd">
<a id="top" href="Login.php">Logout</a>
<a id="top" href="Home.php" style="float: left;">Lazz Pharma Management System</a>
<br><br><br>
</div>

<ul id="ulist"> 
  <li id="list"><a id="hrf"  href="Home.php">Home</a></li>
  <li id="list"><a id="hrf"  href="table.php">Tables</a></li>
  <li id="list"><a id="hrf" href="sql.php">Searching (SQL Queries)</a></li>
  <li id="list"><a id="hrf" href="view.php">Tables from View</a></li>
  <li id="list"><a id="hrf" class="active" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf"  href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Tables: </h2>
  
<button type="button" class="collapsible">A procedure which will take pharmacy id as an input and show the pharmacy name, address and fax</button>
<div class="content">
   <form id="form1" name="form1" action="plsql1.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Pharmacy ID:</label>
 <input type="number" name="input" id="input">
 <?php echo $inputErr; ?>
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
  <fieldset>
</form>
<?php
$users = sql1($input);
?>
</fieldset>
</div>
<button type="button" class="collapsible">A procedure which will find out the most senior employee contract date</button>
<div class="content">
<br>
<fieldset>
<?php
$users = sql2();
?>
</fieldset>
</div>
<button type="button" class="collapsible">A procedure which will take doctor license as an input and show his name</button>
<div class="content">
   <form id="form1" name="form1" action="plsql3.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Admin ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>
</div>
<button type="button" class="collapsible">A function which will take patient national id as an input</button>
<div class="content">
   <form id="form1" name="form1" action="plsql4.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">National id:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>
</div>
<button type="button" class="collapsible">A procedure which will take Employee ID as an input and show his/her name</button>
<div class="content">
   <form id="form1" name="form1" action="plsql5.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Employee ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>
</div>

</div>
</body>
</html>
             
