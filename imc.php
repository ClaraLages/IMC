<?php 
//varialveis//
$peso = $_POST ['peso']; 
$altura = $_POST['altura']; //MUDAR ISSO//

//var dump é para ver o que ta na variavel//


$imc = $peso/pow($altura, 2);
if($imc>40) {
    echo "Obesidade de Nível 3" ;
    } elseif($imc>=35){
    echo "Obesidade de Nível 2";
    } elseif($imc>=30){
    echo "Obesidade de Nível 1";
    } elseif($imc>=25){
    echo "Acima do Peso";
    } elseif($imc>=18.5){
    echo "Normal";
    } elseif($imc>=16){
    echo "Abaixo do Peso";
    } else{
    echo "Peso Deficitário";
    }
    
?> 