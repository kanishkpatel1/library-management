    <?php
session_start(); 
$sname= "localhost";

$unmae= "root";

$password = "";

$db = "db";
$conn = mysqli_connect($sname, $unmae, $password, $db);

if (!$conn) {

    echo "Connection failed!";
    die("failed");

}
if (isset($_POST['submit'])) {
    $user = $_POST['username'];
    // $user = trim($user);
    $pass = $_POST['password'];
    $sql = "SELECT * FROM admini WHERE user='$user' AND pass='$pass'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user'];
        $_SESSION['name'] = $row['fisrt'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorect User name or password");
        exit();
    }
}
if(isset($_POST['submit1'])){
    $first = $_POST['first'];
    $last = $_POST['last'];
    $user = $_POST['user'];
    $user = trim($user);
    $pass = $_POST['pass'];
    $sql1 = "INSERT INTO admini(fisrt,last,user,pass) values('$first','$last','$user','$pass');";
    $result = mysqli_query($conn,$sql1);
    header("Location: index.php");
}
?>