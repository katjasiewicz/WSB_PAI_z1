<?php
$firstName = "Janusz";
$lastName = "Kowalski";
echo "Imię i nazwisko: $firstName $lastName<br>";
echo 'Imię i nazwisko: $firstName $lastName<br>';
//heredoc
echo <<< DATA
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;

$data = <<< DATA
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;
echo $data;

//nowdoc
echo <<< 'DATA'
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;

$oct=001011;
echo $oct;

?>