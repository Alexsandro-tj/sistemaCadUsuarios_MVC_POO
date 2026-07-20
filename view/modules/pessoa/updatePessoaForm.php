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
    echo "<form action='/pessoa/update?id="."'"."method='$_GET'>
        <label for=''>Nome</label>
        <input type='text' name='nome_up' id='' placeholder=''>
        <label for=''>CPF</label>
        <input type='number' name='cpf_up' id='' placeholder=''>
        <label for=''>Data Nascimento</label>
        <input type='date' name='data_nascimento_up' id='' placeholder=''>
        <label for=''>ID</label>
        <input type='number' name='id_up' id=''>
        <input type='submit' value='Update'>
    </form>";
    ?>
</body>

</html>