<?php

class PessoaController
{
    /*Quando esse método é chamado na index, ele vai incluir o arquivo na rota abaixo, que vai listar do SGBD a lista de usuarios cadastrados, usando o método getAllRow instanciado do objeto model e mostrar em tela. O outro include ele lista o HTML com a tabela*/
    public static function index()
    {
        include 'model/PessoaModel.php';
        $model = new PessoaModel();
        $model->getAllRow();

        include 'View/modules/Pessoa/listaPessoa.php';
    }

    //este método é responsável por mostrar o formulario de cadatrasto, chamado pela index
    public static function form()
    {
        include 'View/modules/Pessoa/FormPessoa.php';
    }

    //Esse método chamado la no formulario de cdastro quando é enviado depois de preenchido, chama inclui primeiro a classe PessoaModel, e instancia um objeto chamdo model, e recebe do formulário pela super global Post por um Array associativo e armazado cada propriedade no objeto instanciado. Por fim o objeto instanciado chama o métodp save da classse PessoaModel  e depois de salvo na model e depois redireciona para o arquivo de listagem  na camada View.
    public static function save()
    {
        include 'Model/PessoaModel.php';

        $model = new PessoaModel();

        $model->nome = $_POST['nome'];
        $model->cpf = $_POST['cpf'];
        $model->data_nascimento = $_POST['data_nascimento'];

        $model->save();

        header("location:/pessoa");
    }

    public static function update()
    {

        include 'Model/PessoaModel.php';

        $modelupdate = new PessoaModel();
        $modelupdate->nome = $_GET['nome_up'];
        $modelupdate->cpf = $_GET['cpf_up'];
        $modelupdate->data_nascimento = $_GET['data_nascimento_up'];
        $modelupdate->id = $_GET['id_up'];

        $modelupdate->alter();

        header("location:/pessoa");
    }
    public static function updateform()
    {
        include 'view/modules/pessoa/updatePessoaForm.php';
    }
    public static function deleteUser()
    {
        include 'model/PessoaModel.php';
        $modelDelete = new PessoaModel();
        $modelDelete->id = $_GET['id'];
        $modelDelete->delete($modelDelete->id);
        header("location:/pessoa");
    }
}
