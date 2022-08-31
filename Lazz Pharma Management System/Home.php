<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Lazz Pharma Management System</title>
<style>
body {
  margin: 0;
}
#cd{
 background-color:#36454F;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24)
 }
 #top{
 float:right;
 display:inline-block;
 color:white;
 font-weight: bolder;
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
  height: 142%;
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





.footer{
  width: 100%;
  position: relative;
  height: auto;
  background-color: #36454F;
  color: white;
}
#fp
{
	font-size: 18px;
 padding:18px 26px;
}

.container1
{
display: block;
align-content: center;
padding-top: 50px;
}

.container2
{
display: block;
align-content: center;
padding-top: 50px;
}
.container3
{
display: block;
align-content: center;
padding-top: 50px;
}
.card{
  width: 150px;
  height: 250px;
  display: inline-block;
  padding-left: 10px;
  padding-right: 25px;
  box-sizing: border-box;
  cursor: zoom-in;
  
  background-position: center;
  background-size: cover;
  transition: transform 0.5s;
}

.card:hover
{
  transform: translateY(-28px);
}
img{
  border-radius: 10px;
  width:120%; 
  height: 70%;
}
</style>
</head>
<body>

<div id="cd">
<a id="top" href="Login.php">Logout</a>
<a id="top" href="Home.php" align: "center">Lazz Pharma Management System</a>
<br><br><br>
</div>

<ul id="ulist"> 
  <li id="list"><a id="hrf" class="active" href="Home.php">Home</a></li>
  <li id="list"><a id="hrf" href="table.php">Tables</a></li>
  <li id="list"><a id="hrf" href="sql.php">Searching (SQL Queries)</a></li>
  <li id="list"><a id="hrf" href="view.php">Tables from View</a></li>
  <li id="list"><a id="hrf" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf" href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:700px;">
<div class="container1">
    <div class="card">
    <img src="medicine (1).png" >
    </div>
    <div class="card">
    <img src="medicine (4).png">
    </div>
    <div class="card">
    <img src="medicine (8).png">
    </div>
    <div class="card">
    <img src="medicine (2).png">
    </div>
    <div class="card">
    <img src="medicine (6).png">
    </div>
</div>
<div class="container2">
    <div class="card">
    <img src="medicine (5).png">
    </div>
    <div class="card">
    <img src="medicine (7).png">
    </div>
    <div class="card">
    <img src="medicine (3).png">
    </div>
    <div class="card">
    <img src="medicine (9).png">
    </div>
    <div class="card">
    <img src="medicine (10).png">
    </div>

</div>


</div>

<div class="footer">
	<p id ="fp">Lazz Pharma is a leading drug store enterprise operating for over 45 years. We have developed web and mobile applications for them, dubbed ePharma. ePharma is a customer facing portal that brings Lazz Pharma to the digital medium. Now customers have an intuitive gateway to search, order, and pay for medicines online</p>
    
    <P id ="fp">Email : lazzpharma@gmail.com</P>
    <P id ="fp">Phone : +88012345678</P>
	<p style="text-align: center;">© Uni4, 2022 Copyright </p>
</div>
</body>
</html>
             
