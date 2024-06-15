<?php

$nome= "Cauã";
$anoNasc = 2005;
$idade = 2024 - $anoNasc;
$peso = 78;
$altura = 1.70;
$imc = $peso / pow($altura,2);
$ehCasado = true;

// var_dump($nome);
// var_dump($anoNasc);
// var_dump($peso);
// var_dump($ehCasado);

if($idade>=18){
    echo"$nome vc é maior de idade!<br>"; 
}else{
    echo"$nome vc é menor de iade!<br>";
}

if($imc < 18.5){
    echo"$nome kd vc?<br>";
}else if($imc >= 18.5 && $imc <= 24.9 ){
    echo"$nome tá lindão eih...<br>";
}else if($imc >= 25 && $imc <= 29.9 ){
    echo"$nome para de comer...<br>";
}else if($imc >= 30 && $imc <= 34.9 ){
    echo"$nome começou a passar do limite...<br>";
}else if($imc >= 35 && $imc <= 39.9 ){
    echo"$nome agora se passou...<br>";
}else{
    echo"$nome explodiuuu!!!<br>";
}

$op = 2;
switch($op) {
    case 1:
        echo "<br>Domingo<br>";
        break;
    case 2:
        echo "<br>Segunda-feira<br>";
        break;
    case 3:
        echo "<br>Terça-feira<br>";
        break;
    case 4:
        echo "<br>Quarta-feira<br>";
        break;
    case 5:
        echo "<br>Quinta-feira<br>";
        break;
    case 6:
        echo "<br>Sexta-feira<br>";
        break;
    case 7:
        echo "<br>Sábado<br>";
        break;
    default:
    echo"<br>Dia da semana inválida!<br>";
}

echo"<br>";
$cont = 1;
while($cont <= 10){
    echo"<br>$cont <br>";
    $cont++;
}
echo"<br>";

for($i=1;$i<=10;$i++){
    echo"<p style='border:1px solid black:'>Numero $i </p>";
}

echo "<br>Nome: $nome <br>";
echo "Nascido em $anoNasc <br>";
echo "$nome tem $idade anos de idade";