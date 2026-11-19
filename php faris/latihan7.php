<?php

// Operator Aritmatika

$a = 5;
$b = 2;

$c = $a + $b;
print "$a + $b = $c";
print "<hr>";

$c = $a - $b;
print "$a - $b = $c";
print "<hr>";

$c = $a * $b;
print "$a * $b = $c";
print "<hr>";

$c = $a / $b;
print "$a / $b = $c";
print "<hr>";

$c = $a % $b;
print "$a % $b = $c";
print "<hr>";

$c = $a ** $b;
print "$a ** $b = $c";
print "<hr><br>";

$a = 5;
$c = $a % 2;

print "Sisa 5 dibagi 2 = $c";
print "<hr>";

// Operator Penugasan

$a = 32;

print "Nilai a = $a";
print "<br>";

$speed = 83;

$speed = $speed + 10;

print "Setelah speed = speed + 10: $speed";
print "<br>";

$speed += 10;

print "Setelah speed += 10: $speed";
print "<hr>";

// Increment dan Decrement

$score = 0;

$score++;
$score++;
$score++;

print "Score setelah increment 3x: $score";
print "<br>";

$score--;

print "Score setelah decrement 1x: $score";
print "<hr>";

// Operator Relasi

$a = 6;
$b = 2;

$c = $a > $b;
print "$a > $b: $c";
print "<hr>";

$c = $a < $b;
print "$a < $b: $c";
print "<hr>";

$c = $a == $b;
print "$a == $b: $c";
print "<hr>";

$c = $a != $b;
print "$a != $b: $c";
print "<hr>";

$c = $a >= $b;
print "$a >= $b: $c";
print "<hr>";

$c = $a <= $b;
print "$a <= $b: $c";
print "<hr>";

$total_belanja = 150000;

if ($total_belanja > 100000) {
    print "Anda dapat hadiah!";
}

print "<hr>";

// Operator Logika

$a = true;
$b = false;

$c = $a && $b;

printf("%b && %b = %b", $a, $b, $c);
print "<hr>";

$c = $a || $b;

printf("%b || %b = %b", $a, $b, $c);
print "<hr>";

$c = !$a;

printf("!%b = %b", $a, $c);
print "<hr>";

// Operator Bitwise

$a = 60;
$b = 13;

$c = $a & $b;
print "$a & $b = $c";
print "<br>";

$c = $a | $b;
print "$a | $b = $c";
print "<br>";

$c = $a ^ $b;
print "$a ^ $b = $c";
print "<br>";

$c = $a << $b;
print "$a << $b = $c";
print "<br>";

$c = $a >> $b;
print "$a >> $b = $c";
print "<br><hr>";

// Operator Ternary

$suka = true;

$jawab = $suka ? "iya" : "tidak";

print $jawab;

?>