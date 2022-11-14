<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastro </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="formulario"> 
    <table>
    <form method="get" action="dados.php">
        <tr>
            <td id="req"> Nome: </td>
            <td> <input type="text" name="nome" required> </td>
        </tr> 
        <tr>
            <td id="req"> Ano de Nascimento: </td>
            <td> <input type="text" name="ano" required> </td>
        </tr> 
        <tr>
            <td id="req"> Endereço: </td>
            <td> <input type="text" name="endereco" required> </td>
        </tr> 
        <tr>
            <td id="req"> CEP: </td>
            <td> <input type="text" name="cep" required> </td>
        </tr> 
        <tr>
            <td id="req"> Telefone: </td>
            <td> <input type="text" name="tel" required> </td>
        </tr>
        <tr>
            <td colspan="2"> <button type="submit"> Cadastrar </button></td>
        </tr> 
        
    </form>
    </table>
</div>
</br>


</body>
</html>