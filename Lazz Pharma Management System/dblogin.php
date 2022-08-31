<?php
    include 'Connection.php';
    function login($email, $password)
    {
        $login ="";
    $conn = connect();
    $s = oci_parse($conn, "select email,password from admin where email='$email' and password='$password'");       
    oci_execute($s);
    $row = oci_fetch_all($s, $res);
    if($row){
    header("location: home.php");
    }
    else{
    $login ="wrong password or email";
    }
    }
?>