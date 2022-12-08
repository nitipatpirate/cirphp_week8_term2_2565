<?php
function add(){
    $a = 10;
    $b = 5;
    $add = $a + $b;
    print("<h1>$a + $b = $add</h1>");
}
  
function sub()
{
    $a = 10;
    $b = 5;
    $sub = $a + $b ;
    print("<h1>$a + $b = $sub</h1>");
}

function mod()
{
    $a = 10;
    $b = 5;
    $mod = $a % $b ;
    print("<h1>$a % $b = $mod</h1>");
}

function division()
{
    $a = 10;
    $b = 5;
    $division = $a / $b ;
    print("<h1>$a / $b = $division</h1>");
}

add(); //called function
print("<hr />");
sub(); //called function
print("<hr />");
mod(); //called function
print("<hr />");
division(); //called function
?>