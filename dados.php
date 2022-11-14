<?php 
require_once 'Pessoa.php';
$p1 = new Pessoa;
$p1->nome = @$_GET['nome'];
$p1->ano_nasc = @$_GET['ano'];
$p1->endereco = @$_GET['endereco'];
$p1->cep = @$_GET['cep'];
$p1->telefone = @$_GET['tel'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2> Usuário Cadastrado com Sucesso! </h2> 
    <div>
        <table>
        <tr>
            <td id="req"> Nome: </td>
            <td> <?php echo"$p1->nome"; ?>  </td>
        </tr> 
        <tr>
            <td id="req"> Ano de Nascimento: </td>
            <td> <?php echo"$p1->ano_nasc"; ?> </td>
        </tr> 
        <tr>
            <td id="req"> Endereço: </td>
            <td>  <?php echo"$p1->endereco"; ?> </td>
        </tr> 
        <tr>
            <td id="req"> CEP: </td>
            <td> <?php echo"$p1->cep"; ?> </td>
        </tr> 
        <tr>
            <td id="req"> Telefone: </td>
            <td> <?php echo"$p1->telefone"; ?> </td>
        </tr>
    </table>
</div>
</body>
</html>