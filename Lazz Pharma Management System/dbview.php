<?php
   include 'Connection.php';

   function sql1()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from doctor_view");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NAME</th>"; 
   echo "<th>SPECIALITY</th>"; 
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

   function sql2()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from patient_view");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
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
   
   function sql3()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from drug_name");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NAME</th>"; 
   echo "<th>DRUGNAME</th>"; 
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
   function sql4()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from pharmacy_view");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NAME</th>"; 
   echo "<th>SPECIALITY</th>"; 
   echo "<th>PHARMACY_NAME</th>";
   echo "<th>B_ID</th>";
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