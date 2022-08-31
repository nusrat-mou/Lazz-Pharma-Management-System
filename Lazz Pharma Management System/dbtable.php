<?php
   include 'Connection.php';

   function admin()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from admin");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>EMAIL</th>"; 
   echo "<th>PASSWORD</th>"; 
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function patient()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from patient");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NATIONAL_ID</th>"; 
   echo "<th>NAME</th>"; 
   echo "<th>ADDRESS</th>"; 
   echo "<th>GENDER</th>"; 
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function doctor()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from doctor");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NAME</th>"; 
   echo "<th>SPECIALITY</th>"; 
   echo "<th>LICENSE</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function aid()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from aid");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>A_ID</th>"; 
   echo "<th>NATIONAL_ID</th>"; 
   echo "<th>LICENSE</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function pharmacy()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from pharmacy");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>PHARMACY_ID</th>"; 
   echo "<th>PHARMACY_NAME</th>"; 
   echo "<th>ADDRESS</th>";
   echo "<th>FAX</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function pharmacy_employee()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from pharmacy_employee");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>EMPLOYEE_ID</th>"; 
   echo "<th>NAME</th>"; 
   echo "<th>SHIFTING_TIME</th>";
   echo "<th>CONTRACT_DATE</th>";
   echo "<th>PHARMACY_ID</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function bid()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from bid");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>B_ID</th>"; 
   echo "<th>LICENSE</th>"; 
   echo "<th>PHARMACY_ID</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function transaction()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from transaction");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>COMPANY_ID</th>"; 
   echo "<th>ADDRESS</th>"; 
   echo "<th>COMPANY_NAME</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function drug()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from drug");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>DRUGNAME</th>"; 
   echo "<th>COMPANY_ID</th>"; 
   echo "<th>DRUGTYPE</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function buy()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from buy");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NDID</th>"; 
   echo "<th>DRUGNAME</th>"; 
   echo "<th>NATIONAL_ID</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function sell()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from sell");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>DRUGNAME</th>"; 
   echo "<th>PHARMACY_ID</th>"; 
   echo "<th>DPID</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function cdid()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from cdid");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>COMPANY_ID</th>";
   echo "<th>DRUGNAME</th>"; 
   echo "<th>CDID</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }
?>