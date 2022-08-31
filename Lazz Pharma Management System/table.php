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
include 'dbtable.php';
?>
<div id="cd">
<a id="top" href="Login.php">Logout</a>
<a id="top" href="Home.php" style="float: left;">Lazz Pharma Management System</a>
<br><br><br>
</div>

<ul id="ulist"> 
  <li id="list"><a id="hrf"  href="Home.php">Home</a></li>
  <li id="list"><a id="hrf" class="active" href="table.php">Tables</a></li>
  <li id="list"><a id="hrf" href="sql.php">Searching (SQL Queries)</a></li>
  <li id="list"><a id="hrf" href="view.php">Tables from View</a></li>
  <li id="list"><a id="hrf" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf" href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Tables: </h2>
  

<button type="button" class="collapsible">Admin</button>
<div class="content">
<?php
$users = admin();
?>
</div>

<button type="button" class="collapsible">Patient</button>
<div class="content">
<?php
$users = patient();
?>
</div>

<button type="button" class="collapsible">Doctor</button>
<div class="content">
<?php
$users = doctor();
?>
</div>

<button type="button" class="collapsible">Aid</button>
<div class="content">
<?php
$users = aid();
?>
</div>

<button type="button" class="collapsible">Pharmacy</button>
<div class="content">
<?php
$users = pharmacy();
?>
</div>

<button type="button" class="collapsible">Pharmacy_employee</button>
<div class="content">
<?php
$users = pharmacy_employee();
?>
</div>

<button type="button" class="collapsible">Bid</button>
<div class="content">
<?php
$users = bid();
?>
</div>

<button type="button" class="collapsible">Transaction</button>
<div class="content">
<?php
$users = transaction();
?>
</div>

<button type="button" class="collapsible">Drug</button>
<div class="content">
<?php
$users = drug();
?>
</div>

<button type="button" class="collapsible">Buy</button>
<div class="content">
<?php
$users = buy();
?>
</div>

<button type="button" class="collapsible">Sell</button>
<div class="content">
<?php
$users = sell();
?>
</div>

<button type="button" class="collapsible">Cdid</button>
<div class="content">
<?php
$users = cdid();
?>
</div>

</div>

</body>
</html>
             
