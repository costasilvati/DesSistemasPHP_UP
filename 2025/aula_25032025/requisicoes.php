<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Solicitação via POST! <br>";
    if(!empty($_POST['nome'])){
        echo "<p> Olá ". $_POST['nome']."!!";
    }
    foreach($_POST as $chave => $valor){ 
        echo "<p> $chave: $valor </p>";
    }
}elseif($_SERVER["REQUEST_METHOD"] == "GET"){
    echo "Solicitação via GET! <br>";
}
?>