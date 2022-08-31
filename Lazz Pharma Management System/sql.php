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
include 'dbsql.php';
?>
<div id="cd">
<a id="top" href="Login.php">Logout</a>
<a id="top" href="Home.php" style="float: left;">Lazz Pharma Management System</a>
<br><br><br>
</div>

<ul id="ulist"> 
  <li id="list"><a id="hrf"  href="Home.php">Home</a></li>
  <li id="list"><a id="hrf"  href="table.php">Tables</a></li>
  <li id="list"><a id="hrf" class="active" href="sql.php">Searching (SQL Queries)</a></li>
  <li id="list"><a id="hrf" href="view.php">Tables from View</a></li>
  <li id="list"><a id="hrf" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf" href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Tables: </h2>


<button type="button" class="collapsible">Display all the doctor name, their speciality and which phramacy they work for</button>
<div class="content">
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" novalidate >
</fieldset>
</form>

<?php
$users = sql9($input);
?>
</div>

<button type="button" class="collapsible">Find out the license of Dr. NAZMUL</button>
<div class="content">
<?php
$users = sql1();
?>
</div>
<button type="button" class="collapsible">Find all the greatest license holder than Wahab</button>
<div class="content">
<?php
$users = sql2();
?>
</div>
<button type="button" class="collapsible">Find out the pharmacy_id wise number of employee we have</button>
<div class="content">
<?php
$users = sql3();
?>
</div>
<button type="button" class="collapsible">Find out the pharmacy_id wise maximum and minimum contract date</button>
<div class="content">
<?php
$users = sql4();
?>
</div>
<button type="button" class="collapsible">Find out the pharmacy name and address whose pharmacy id is 123456111</button>
<div class="content">
<?php
$users = sql5();
?>
</div>
<button type="button" class="collapsible">Find the name and drugname whose national id is 111222301</button>
<div class="content">
<?php
$users = sql6();
?>
</div>
<button type="button" class="collapsible">Show all the patient name, address, gender and drugname</button>
<div class="content">
<?php
$users = sql7();
?>
</div>
<button type="button" class="collapsible">Find the drugname, drugtype where drugname is abc</button>
<div class="content">
  <?php
$users = sql8();
?>
</div>


</body>
</html>
             
