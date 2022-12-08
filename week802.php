<?php
function add($a,$b)
{
    $a;
    $b;
    $add = $a + $b;
    print("<h1>$a + $b = $add</h1>");
}

function sub($a,$b)
{
    $a;
    $b;
    $sub = $a - $b;
    print("<h1>$a - $b = $sub</h1>");
}

function mod($a,$b)
{
    $a;
    $b;
    $mod = $a % $b;
    print("<h1>$a % $b = $mod</h1>");
}

function division($a,$b)
{
    $a;
    $b;
    $division = $a / $b;
    print("<h1>$a / $b = $division</h1>");
}
add(10,5);
print("<hr />");
sub(10,5);
print("<hr />");
mod(10,5);
print("<hr />");
division(10,5);


?>