<?php
if(isset($_POST['submit2'])){
$con = mysqli_connect("localhost","root","","db");
if(!$con){
    die("error");
}
else{
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $bookname = $_POST['bookname'];
    $sauthor = $_POST['sauthor'];
    $returndate = date('Y-m-d', strtotime($_POST['returndate']));
    $issuedate = date('Y-m-d', strtotime($_POST['issuedate']));
    $q1 = "INSERT INTO student(id,sname,bookname,author,issuedate,returndate) VALUES('$sid','$sname','$bookname','$sauthor','$issuedate','$returndate')";
    $result = mysqli_query($con,$q1);
    $q2 = "UPDATE books set Available=\"No\" where name='$bookname';";
    $result1 = mysqli_query($con,$q2);
    header("Location: home.php");
}
}
?>