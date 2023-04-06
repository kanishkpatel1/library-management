<?php 

session_start();

if (isset($_SESSION['name']) || isset($_SESSION['user_name'])) {

 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
    <link rel="stylesheet" href="../Library/index.css"/>
    
    
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
     <div class="libbox">
        <div class="grid">
                <i class="fa fa-book" aria-hidden="true"></i>
                <div class="ran">New Book</div>
        </div>
        <div class="grid">
                <i class="fa fa-address-book-o" aria-hidden="true"></i>
                <div id="fun4" onclick="booklist()">BookList</div>
        </div> 
        <div class="grid">
                <i class="fa fa-user" aria-hidden="true"></i>
                <div class="ran1" >New Student</div>
        </div>
        <div class="grid">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div id="fun2" onclick="studentlist()">Student list</div>
        </div>
     </div>
<div class="bookdailog">  
<form action="addbooks.php" method="POST" >
    <div class="bookhead">
        New Books Entry
    </div>
    <div class="bookentry">
    <div><label for="in1">Book ID:-&nbsp;</label><input type="tel" name="id" id="in1" placeholder="Enter Id number"></div>
    <div><label for="in2">Name:-  &nbsp;&nbsp;&nbsp;</label><input name="name" type="text" id="in2" placeholder="Enter Book name"></div>
    <div><label for="in3">Author:- &nbsp;</label><input type="text" name="author" id="in3" placeholder="Enter Book author name"></div>
    <div><label for="in4">Subject:-</label><input type="text" id="in4" name="subject" placeholder="Enter subject name"></div>
    </div>
    <div class="booksub">
        
        <input type="submit" class="ran3" name="submit1" value="Submit">
    </div>
</form>
<button class="rancancel">Cancel</button>
</div>
<div class="entrydailog">
<form action="newentry.php" method="POST">
    <div class="bookhead">
        Books Issue
    </div>
    <div class="bookentry">
    <div><label for="in11">Student ID:-&nbsp;</label><input type="tel" name="sid" id="in11" placeholder="Enter student id"></div>
    <div><label for="in22">Name:- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</label><input type="text" name="sname" id="in22" placeholder="Enter student name"></div>
    <div><label for="in33">Book name:- &nbsp;</label><input type="text" name="bookname" id="in33" placeholder="Enter Book name"></div>
    <!-- <div><label for="in33">Book name:- </label>
        <select name="bookname" id="in33">
           
        </select>
    </div> -->
    <div><label for="in55">Author:-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" id="in55" name="sauthor" placeholder="Enter Author name"></div>
    <div><label for="in44">Issue Date:-&nbsp;&nbsp;</label><input type="date" id="in44" name="issuedate" value="<?php echo date('Y-m-d'); ?>"  placeholder="Enter date name"></div>
    <div><label for="in66">Return Date:-</label><input type="date" id="in66" name="returndate" value="<?php echo date('Y-m-d'); ?>"  placeholder="Enter return name"></div>
    </div>
    <div class="booksub">
        
        <input type="submit" class="ran3" name="submit2" value="Submit">
    </div>
</form>
<button class="rancancel1">Cancel</button>
</div>
</div>
<script src="./bookentry.js"></script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>