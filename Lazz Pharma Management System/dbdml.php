<?php
   include 'Connection.php';
   function sql1($nid,$nm,$add,$gen)
   {
   $conn = connect();
   $sql = 'BEGIN insert_patient(:nid, :nm, :add, :gen); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':nid',$nid,32);
   oci_bind_by_name($stmt,':nm',$nm,32);
   oci_bind_by_name($stmt,':add',$add,32);
   oci_bind_by_name($stmt,':gen',$gen,32);
   $res= oci_execute($stmt);
   return $res;
   }
   
   function sql3($nid,$nm,$add,$gen)
   {
   $conn = connect();
   $sql = 'BEGIN update_patient(:nid, :nm, :add, :gen); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':nid',$nid,32);
   oci_bind_by_name($stmt,':nm',$nm,32);
   oci_bind_by_name($stmt,':add',$add,32);
   oci_bind_by_name($stmt,':gen',$gen,32);
   $res= oci_execute($stmt);
   return $res;
   }
   function sql4($nid)
   {
   $conn = connect();
   $sql = 'BEGIN delete_patient(:nid); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':nid',$nid,32);
   $res= oci_execute($stmt);
   return $res;
   }
?>