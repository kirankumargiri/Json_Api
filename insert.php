<?php

header('Content-Type:application/json');
$success=false;
$conn= new mysqli("localhost","root","","security");
if($conn->connect_error){
    die("connection failed");
}
$sql="INSERT INTO learn (id,Name,DOB,Info) values (null,'iv','2001-04-14','sdewrfdvfd')";
$result=$conn->query($sql);
if($result===TRUE){
$success=true;

}
$response=array(
    'status'=>'ok',
    'success'=>$success
    );
    echo json_encode($response);
$conn->close();
?>