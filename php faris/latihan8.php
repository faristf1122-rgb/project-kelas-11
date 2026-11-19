<?php

// IF
$total_belanja = 150000;

if($total_belanja > 100000){
    print "Anda dapat hadiah!";
}

print "<hr>";

// IF ELSE
$umur = 19;

if ($umur < 18 ){
    print "Kamu tidak boleh membuka situs ini!";
} else {
    print "Selamat datang di website kami!";
}

print "<hr>";

// IF ELSE IF
$nilai = 88;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

print "Nilai anda: $nilai<br>";
print "Grade: $grade";

print "<hr>";

// SWITCH CASE
$level = 3;

switch($level){
    case 1:
        print "Pelajari HTML";
        break;
    case 2:
        print "Pelajari CSS";
        break;
    case 3:
        print "Pelajari Javascript";
        break;
    case 4:
        print "Pelajari PHP";
        break;
    default:
        print "Kamu bukan programmer!";
}

print "<hr>";

// TERNARY
$suka = true;

print $suka ? "Aku juga suka kamu": "Baiklah!";

print "<hr>";

// IF BERSARANG
$umur = 17;
$menikah = false;

if($umur > 18){
    if($menikah){
        print "Selamat datang pak!";
    } else {
        print "Selamat datang wahai pemuda!";
    }
} else {
    print "Maaf website ini hanya untuk yang sudah berumur 18+";
}

?>