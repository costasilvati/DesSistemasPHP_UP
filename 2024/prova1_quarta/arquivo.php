<?php
    $emailsCadatrados = array('email@email.com', 'teste@email.com');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nascimento = $_POST['nascimento'];
    
    if(empty($nome) or empty($email) or empty($senha) or empty($nascimento)){
        echo "<p>Campos devem ser preenchidos </p>";
    }else{
        if(strlen($senha) < 8){
            echo "<p>Senha deve ter mais de 8 caracteres </p>";
        }
        if(in_array($email, $emailsCadatrados)){
            echo "<p> E-mail já está cadastrado no sistema </p>";
        }else{
            array_push($emailsCadat rados, $email);
        }
    }

?>