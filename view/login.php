<?php
if(isset($_POST['login']))
{
    include_once('conexaol.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Aqui você deve adicionar a lógica para verificar se o usuário pode fazer login.
    // Estou assumindo que a inserção no banco de dados significa um login bem-sucedido.
    // Você deve substituir isso pela lógica de autenticação adequada.
    $result = mysqli_query($conexaol, "INSERT INTO login (nome,senha) VALUES ('$nome','$senha')");

    if($result) {
        // Redireciona para cadastro.php após inserção bem-sucedida
        header('Location: cadastro.php');
        exit;
    } else {
        echo "Erro ao inserir os dados: " . mysqli_error($conexaol);
    }
}
?>


<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>



    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, yellow);
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 5
            px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        button:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="login.php" method="post">

    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" placeholder="Nome">
    <br><br>
    <label for="senha">Senha</label>
    <input type="password" id="senha" name="senha" placeholder="Senha">
    <br>
    <br>
    <button type="submit" id="login" name="login">Entrar</button>
    <br>
    <br>    
    <button type="reset" id="apagar" name="apagar">Apagar</button>
</form>

    </div>
</body>
</html>
