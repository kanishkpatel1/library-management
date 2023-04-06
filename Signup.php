<?php
// $con = mysqli_connect("localhost","root","","db");
// if(){
// $qu = mysqli_query("insert into student values()");
// // while($row = mysqli_fetch_assoc($qu)){
// //     $json[]=$row;
// // }
Header('Access-Control-Allow-Origin: *');
Header("Access-Control-Allow-Headers: content-type");
Header( "Access-Control-Allow-Methods: PUT, POST, GET, DELETE, PATCH, OPTIONS" ); 
$con = mysqli_connect("localhost","root","","db");
$method = $_SERVER['REQUEST_METHOD'];
if($method=='POST'){
if(!$con){
    die("Connection failed:".mysqli_connect_error());
}
else{
    $data = json_decode(file_get_contents("php://input"));   
    // console.log($data);          
    // print_r($data);
    $first = $data->first;
    $last = $data->last;
    $user = $data->user;
    $pass = $data->pass;
    $person = $data->person;
    $qu = mysqli_query($con,"insert into student(first,last,user,pass,person) values('$first','$last','$user','$pass','$person')");
}}

?>