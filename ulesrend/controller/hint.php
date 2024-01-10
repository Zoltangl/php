<?php
// Nevek
$a[] = "S. Balázs";
$a[] = "K. Márton";
$a[] = "B. Marcell";
$a[] = "H. Szabolcs";
$a[] = "B. László";
$a[] = "S. Attila";
$a[] = "F. László";
$a[] = "K. Dominik";
$a[] = "Tanár";
$a[] = "G. Zoltán";
$a[] = "J. Dániel";
$a[] = "H. Márk";
$a[] = "T. Márton";
$a[] = "H. Ferenc";
$a[] = "V. Szabolcs";
$a[] = "R. Dávid";


// Paraméter
$q = $_REQUEST["q"];

$hinty = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hinty === "") {
        $hinty = $name;
      } else {
        $hinty .= ", $name";
      }
    }
  }
}

// Ha nincs találat
echo $hinty === "" ? "Nincs találat" : $hinty;
?>