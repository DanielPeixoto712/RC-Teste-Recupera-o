<?php
$dia=$_POST['dias'];
$mes=$_POST['meses'];

$dia=array('domingo', 'segunda-feira', 'terça-feira', 'quarta-feira', 'quinta-feira', 'sexta-feira', 'sabado'
);
$mes=array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro','Novembro', 'Dezembro');


echo "O dia é ".$dia[$_POST['dias']];
echo "<br>";
echo "O mês é ".$mes[$_POST['meses']];
?>