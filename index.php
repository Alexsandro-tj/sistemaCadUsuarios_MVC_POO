<?php
include('Controller/PessoaController.php');
/*Armazenar an variavel $url, depois usar a função parse_url para pegar parte da rota pela url. Dentro da função usamos a variavel super global server e dentro da super global usamos o parametro reuquest_uri, depois usamo no segundo argumento o php_ur_path*/
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($url) {
    case '/':
        echo "Página inicial";
        break;
    //Caso que chama o método Index da classe PessoaController e lista as pessoas cadastradas
    case '/pessoa':
        PessoaController::index();
        break;
    // Caso que chama o formulario de cadastro pela classe Pessoacontroller e realizar o cadastro
    case '/pessoa/form':
        PessoaController::form();
        break;
    // Caso a ser chamdo quando o formulario é preechido e envido pela rota abaixo la na classe Pessoa controller no método save
    case '/pessoa/form/save':
        PessoaController::save();
        break;
    case '/pessoa/updatePessoaForm':
        PessoaController::updateform();
        break;
    case '/pessoa/update':
        PessoaController::update();
        break;

    default:
        echo "erro 404";
        break;
}
