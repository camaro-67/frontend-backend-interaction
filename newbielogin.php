<?php
// get the q parameter from URL
$q = $_REQUEST["login"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "abc123") {
  $hint = "Wrong password";
  echo $hint;
}
else {
    $hint = "Welcome to the page";
    echo $hint;
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
