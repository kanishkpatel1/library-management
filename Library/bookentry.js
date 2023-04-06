const s = document.querySelector(".ran");
const s00 = document.querySelector(".bookdailog");

s.onclick=()=>{
    s00.classList.toggle("add");
}

const s2 = document.querySelector(".rancancel");
s2.onclick=()=>{
    s.click();
}

const s1 = document.querySelector(".ran1");
const s11 = document.querySelector(".entrydailog");
s1.onclick=()=>{
    s11.classList.toggle("show");
}

const s20 = document.querySelector(".rancancel1");
s20.onclick=()=>{
    s1.click();
}

function studentlist() {
    window.location = "http://localhost/PHP/Library/student.php";
}

function booklist(){
   window.location = "http://localhost/PHP/Library/booklist.php";
}