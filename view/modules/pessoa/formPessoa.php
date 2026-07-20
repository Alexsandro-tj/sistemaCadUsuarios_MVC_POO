<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Cadastro</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

<!-- o Actio aqui vai acionar o index que vai chamar a classe PessoaController que vai chamar o método save-->
    <form action="/pessoa/form/save" method="post">
        <section class="w3-container w3-margin w3-section w3-center w3-border  w3-border-raius">
            <?php
            echo "<h1 class = 'w3-center w3-blue-light'>Cadastro Login</h1>";
            ?>
            <label for="">Nome</label>
            <input class="w3-input w3-border w3-round w3-input w3-hover-grey"type="text" name="nome" placeholder="Digite seu Nome" required><br><br>

            <label for="">CPF</label>
            <input class="w3-input w3-border w3-round w3-input w3-hover-grey" type="number" name="cpf" placeholder="Digite seu CPF" required><br><br>
            
            <label for="">Data de Nascimento</label>
            <input class="w3-input w3-border w3-round w3-input w3-hover-grey" type="date" name="data_nascimento" id="" required><br><br>
            
            <input class="w3-button w3-green w3-houver w3-btn w3-round w3-input w3-hover-grey" type="submit" value="Cadastrar">
        </section>
    </form>

</body>

</html>