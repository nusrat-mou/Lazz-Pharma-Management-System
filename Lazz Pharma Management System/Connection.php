<?php
function connect()  
{
$conn = oci_connect('hr', 'hr', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
return $conn;    
}
?>