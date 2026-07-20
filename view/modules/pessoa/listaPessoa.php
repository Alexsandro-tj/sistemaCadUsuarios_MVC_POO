<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>
    <table>
        <th>
            <tr>Id </tr>
            <tr>Nome </tr>
            <tr>Cpf </tr>
            <tr>Data Nascimento </tr>
        </th>
        <?php foreach($model->row as $item)
        echo"<tr> ".
            "<td> ".$item->id. "</td>
            <td> ". $item->nome."</td>
            <td> ". $item->cpf."</td>
            <td> ".$item->datanascimento."</td>
        </tr>"
         ?>
    </table>
</body>
</html>