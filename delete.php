<?php
header("Content-Type:application/json");
$success=false;
$conn= new mysqli("localhost","root","","secty");
if($conn->connect_error){
    die("failed");
}
$sql="DELETE FROM learn where id=1";
$result=$conn->query($sql);
if($result===true){
$success=true;
}
$response=array(
    'status'=>'ok',
    'success'=>$success
);
echo json_encode($response);
?>