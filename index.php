<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <h1>operator logika dalam php</h1>
<?php 
// or
$nilaiangka = 87;

if(($nilaiangka < 0)||($nilaiangka <100))
{
    echo "nilai yang diberikan  benar";
}
else
{

// And
if(($nilaiangka >= 80) && ($nilaiangka <= 100)){
    $nilaihuruf = "A";
}
else if(($nilaiangka >= 70) && ($nilaiangka >= 65)){
    $nilaihuruf = "B";
}
else if(($nilaiangka >=60) && ($nilaiangka >55)){
    $nilaihuruf = "C";
}
echo "nilai hurufnya adalah :".$nilaihuruf;
}
?>
</body>
</html>