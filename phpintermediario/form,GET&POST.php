<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    /*
        if(isset($_GET['acao'])){
            $nome = @$_GET['nome'];
            $email = @$_GET['email'];
            echo $nome;
            echo '<br />';
            echo $email;
        }
    */

        if(isset($_POST['acao'])){
            echo $_POST['numero1'] + $_POST['numero2'];
        }
    ?>


    
    <form method="post">
        <input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="Enviar">
    </form>




</body>
</html>