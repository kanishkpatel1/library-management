
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="../Library/index.css"/>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class='nav'>
<div class="li">
            <a href="home.php" style="text-decoration:none; color:#fff; background-color:#24A0ED; border-radius:35px; padding:8px;" >Home</a>
            <a href="logout.php" style="text-decoration:none; color:#fff; background-color:#24A0ED; border-radius:35px; padding:8px;">Logout</a>
</div>
        <div class='name'><i class="fa fa-book"></i>Library Management System</div>
</div>
<div class="parent">
     <div class="stubox">
         <div class="listhead">
             Books List
</div>
<table class="table table-striped">
    <thead>
    <tr>
    <th scope="col">#Id</th>
    <th scope="col">Name</th>
    <th scope="col">Author</th>
    <th scope="col">subject</th>
    <th scope="col">Availability</th>
    </tr>
    </thead>
<tbody>
    <?php
        $con = mysqli_connect("localhost","root","","db");
        if(!$con){
            echo die("error");
        }
        else{
            $q1 = "select * from books;";
            $result = mysqli_query($con,$q1);
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                    echo "<th scope=\"row\">".$row['id']."</th>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['author']."</td>";
                    echo "<td>".$row['subject']."</td>";
                    echo "<td>".$row['Available']."</td>";
                echo "</tr>";
            }
        }
    ?>
</tbody>
</table>
</div>
</div>
</body>
</html>