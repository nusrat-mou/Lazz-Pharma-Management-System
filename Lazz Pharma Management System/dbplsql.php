<?php
   include 'Connection.php';
   function sql1($pid)
   {
   $conn = connect();
   $sql = 'BEGIN proc_pharmacy(:pid, :pnm, :padd, :pfax); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':pid',$pid,32);
   oci_bind_by_name($stmt,':pnm',$pnm,32);
   oci_bind_by_name($stmt,':padd',$padd,32);
   oci_bind_by_name($stmt,':pfax',$pfax,32);
   oci_execute($stmt);
   echo "Name : $pnm<br>";
   echo "Address : $padd<br>";
   echo "Fax: $pfax<br>";
   }
   function sql2()
   {
   $conn = connect();
   $sql = 'BEGIN proc_pharmacy_employee(:maxcd); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':maxcd',$maxcd,32);
   oci_execute($stmt);
   echo "Most senior employee contract date : $maxcd<br>";
   }
   function sql3($dlic)
   {
   $conn = connect();
   $sql = 'BEGIN proc_doctor(:dlic,:dnm); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':dlic',$dlic,32);
   oci_bind_by_name($stmt,':dnm',$dnm,32);
   oci_execute($stmt);
   echo "Name : $dnm<br>";
   }
   function sql4($nid)
   {
   $conn = connect();
   $sql = 'BEGIN func_pat(:nid); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':nid',$nid,32);
   $res= oci_execute($stmt);
   }
   function sql5($eid)
   {
   $conn = connect();
   $sql = 'BEGIN proc_phar_emp(:eid, :enm); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':eid',$eid,32);
   oci_bind_by_name($stmt,':enm',$enm,32);
   oci_execute($stmt);
   echo "Name : $enm<br>";
   }
?>