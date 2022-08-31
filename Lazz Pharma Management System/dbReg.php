
<?php
    include 'Connection.php';
    function reg($email, $password)
    {
    $conn = connect();
    $sql = oci_parse($conn, "INSERT INTO admin (email,password) VALUES ('$email','$password')");       
    $res= oci_execute($sql);
    return $res;
    }
?>