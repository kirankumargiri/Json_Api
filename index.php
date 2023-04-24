<?php
header('Content-Type:application/json');
$data=array();
$conn= new mysqli("localhost","root","","security");
if($conn->connect_error){
    die("connection failed");
}
$sql="SELECT * FROM learn";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $data[]=$row;

    }
}
$response=array(
    'staus'=>'ok',
    'data'=>$data
);
echo json_encode($response);
$conn->close();
?>