<?php
Header('Access-Control-Allow-Origin: *');
Header("Access-Control-Allow-Headers: content-type");
Header( "Access-Control-Allow-Methods: PUT, POST, GET, DELETE, PATCH, OPTIONS" );
header("Content-type: application/json; charset=utf-8");
$method = $_SERVER['REQUEST_METHOD'];
$data = json_decode(file_get_contents("php://input"));
$con = mysqli_connect("localhost","root","","db");
$q2 = "select * from student";
$q1 = "select * from admin";
if($method=="POST"){
    if($data->person=="student"){
    if(!$con){
        die("Connection failed".mysqli_connect_error());
    }
    else{
        $temp = mysqli_query($con,$q2);
        while($row = mysqli_fetch_assoc($temp)){
            $rows[]=$row;
        }
        echo json_encode($rows);
    }
}
else{
        if(!$con){
            die("Connection failed".mysqli_connect_error());
        }
        else{
            $temp1 = mysqli_query($con,$q1);
            while($row1 = mysqli_fetch_assoc($temp1)){
                $rows1[]=$row1;
            }
            echo json_encode($rows1);
        }

}
}
?>