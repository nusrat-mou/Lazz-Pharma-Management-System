<?php
   include 'Connection.php';
   function sql1()
   {
   $conn = connect();
   $s = oci_parse($conn, "select license from doctor where Name='Dr. NAZMUL'");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>LICENSE</th>"; 
//    echo "<th>NAME</th>"; 
//    echo "<th>SPECIALITY</th>";
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
   $s = oci_parse($conn, "select License from doctor where License >any (select license from doctor where Name='Dr. Wahab')");       
   $res= oci_execute($s);
   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>LICENSE</th>"; 
//    echo "<th>NAME</th>"; 
//    echo "<th>SPECIALITY</th>"; 
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
   $s = oci_parse($conn, "select count(name) from pharmacy_employee group by pharmacy_id");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>COUNT(NAME)</th>"; 
   
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
   $s = oci_parse($conn, "select min(contract_date), max(contract_date) from pharmacy_employee group by pharmacy_id");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>MIN(CONTRACT_DATE)</th>"; 
   echo "<th>MAX(CONTRACT_DATE)</th>"; 
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



   function sql5()
   {
   $conn = connect();
   $s = oci_parse($conn, "select pharmacy_name, address from pharmacy where address=(select address from pharmacy where pharmacy_id=123456111)");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>PHARMACY_NAME</th>"; 
   echo "<th>ADDRESS</th>"; 
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

   function sql6()
   {
   $conn = connect();
   $s = oci_parse($conn, "select p.NAME, b.DRUGNAME from Patient p, Buy b where p.NATIONAL_ID=b.NATIONAL_ID and p.NATIONAL_ID='111222301'");       
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

   function sql7()
   {
   $conn = connect();
   $s = oci_parse($conn, "select p.Name,p.Address,p.Gender,b.Drugname from patient p, Buy b where p.National_id=b.National_id");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NAME</th>"; 
   echo "<th>ADDRESS</th>"; 
   echo "<th>GENDER</th>";
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

      function sql8()
   {
   $conn = connect();
   $s = oci_parse($conn, "select d.DRUGTYPE, s.DRUGNAME from Drug d, Sell s where d.DRUGNAME=s.DRUGNAME and s.DRUGNAME='abc'");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>DRUGTYPE</th>"; 
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
     
      function sql9($input)
   {
   $conn = connect();
   $s = oci_parse($conn, "select Name, Speciality, pharmacy_name from doctor, BID, pharmacy where BID.License=doctor.License and pharmacy.pharmacy_id=BID.pharmacy_id");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>NAME</th>"; 
   echo "<th>SPECIALITY</th>"; 
   echo "<th>PHARMACY_NAME</th>";
   
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