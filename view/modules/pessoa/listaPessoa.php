<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>

<body>
    <?php
    /** @var PessoaModel $model
     */
    ?>
    <table>
        <th>
            <tr>Id </tr>
            <tr>Nome</tr>
            <tr>Cpf </tr>
            <tr>Data Nascimento </tr>
        </th>
        <?php

        foreach ($model->row as $item)
            echo "<tr> " .
                "<td> " . $item->id . " </td>" .
                "<td> " . $item->nome . " </td>" .
                "<td> " . $item->cpf . " </td>" .
                "<td> " . $item->datanascimento . "</td>" .
                "<td><button><a href='/pessoa/updatePessoaForm?id=" . $item->id . "'>Editar<a></button>" .
                "<td><button><a href='/pessoa/delete?id=" . $item->id . "'>Excluir<a></button>" .
                "</tr>";
        ?>
    </table>
</body>

</html>