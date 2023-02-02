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
<?php
include 'Person.php';

$umut = new Person("Umut", 18, "M", true, 7.9);

$demirel = new Person("Demirel", 22, "M", false, 0);

$anisha = new Person("Anisha", 21, "F", true, 8);

$anish = new Person("Anish", 20, "M", true, 5.4);

$Dudley = new Person("Dudley", 25, "AT-AT", true, 5.4);

$Dudley->setAge(26);
echo $Dudley->getGegevens();


?>



</body>
</html>
