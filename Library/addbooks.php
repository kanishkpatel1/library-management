<?php
if(isset($_POST['submit1'])){
$con = mysqli_connect("localhost","root","","db");
if(!$con){
    die("error");
}
else{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $subject = $_POST['subject'];
    $sql = "insert into books(id,name,author,subject) values('$id','$name','$author','$subject');";
    $result = mysqli_query($con,$sql);
    header("Location: home.php");
}
}
?>