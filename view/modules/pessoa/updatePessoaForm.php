<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <?php
    $idUpdate = $_GET['id'];
    
    echo "<form action='/pessoa/update'" . "method='get'>
        <label>Nome</label>
        <input type='text' name='nome_up' id='' placeholder=''>
        <label >CPF</label>
        <input type='number' name='cpf_up' id='' placeholder=''>
        <label >Data Nascimento</label>
        <input type='date' name='data_nascimento_up' id='' placeholder=''>
        <input type='hidden' name='id_up' id='' value='$idUpdate'>
        <input type='submit' value='Update'>
    </form>";
    ?>
</body>

</html>