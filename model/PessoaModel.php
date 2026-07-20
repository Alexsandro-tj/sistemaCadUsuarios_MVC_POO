<?php 

class PessoaModel
{
    /*Propiedades que estão recebendo la da PessoaController os valores vindo do formulário. A propiredade $row está recebendo da DAO o objeto $stmt com as configurações personalizadas do Prepare e listar os usuarios cadastrados*/
public $nome, $cpf, $data_nascimento, $id;
public $row;

/*Método para efetivar a o salvamento e inserção la no banco de dados*/
public function save()
{
   //Inclusão da conexão do banco de dados e efetivando a conexão com o banco de dados quando se instancia um objeto.
    include 'DAO/PessoaDAO.php';
    $dao = new PessoaDAO();
    //objeto chamando o método insert la da DAO, para efetivar a inserção no banco de dados, o armunto é para chamar todas as propriedades desta classe juntas
    $dao->insert($this);
}

// método que é chamado para efetivar a listagem dos cadastrados no banco de dados, criado lá ma DAO
public function getAllRow()
{
    // Inclusão do arquivo da conexão e depois para efetivar a conexão por meio da instanciação do objeto $dao
  include 'DAO/PessoaDAO.php';
  $dao = new PessoaDao();
  //chamando a propriedade row e essa propriedade armazenado o objeto $dao que esta chamando o método select
    $this->row = $dao->select();
}
public function alter()
{
include 'DAO/PessoaDAO.php';
$dao1 = new PessoaDao();
$dao1->atualiza($this);
}
}

?>