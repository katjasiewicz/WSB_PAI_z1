<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4>Lista HTML</h4>
<ul>
    <li>Poznań</li>
    <li>Gniezno</li>
    <li>Września</li>
</ul>
<?php
$city = "Jarocin";
echo<<<LIST
<h4>Lista PHP</h4>
<ul>
    <li>Poznań</li>
    <li>Gniezno</li>
    <li>Września</li>
    <li>$city</li>
</ul>
LIST;
?>
<h4>Lista PHP numerowana</h4>
<?php
require "./scripts/script.php";
include_once "./scripts/script.php";

?>
<h3>Dane po wywołaniu skryptu</h3>
<ol>
    <li>Rozdział 1
        <ul>
            <li>Poznań</li>
            <li>Gniezno</li>
            <li>Jarocin</li>
        </ul>
    </li>
    <li>Rozdział 2</li>
    <li>Rozdział 3</li>
</ol>
</body>
</html>