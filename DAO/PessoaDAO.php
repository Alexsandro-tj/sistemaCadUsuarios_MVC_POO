<?php
class PessoaDao
{
     //delcaração da propriedade que vai receber a conexão
     public $conexao;
     //Método ocntrutor da conexão. Quando um objeto for instancia da Classe PessoaDAO, o método construtor vai fazer uma conexão automatica depois de instanciado
     public function __construct()
     {
          /*No PDO tem esssa sintaxy, onde a variavel $dsn vai conter o valor da String abaixo (o host que é local e sua porta; eo nome da sua base de dados) */
          $dsn = "mysql:host=localhost:3306;dbname=cadusers";
          /*Chamado de um novo objeto PDO chamado a propriedade de conexão e como argumento colocamos a varial $dsn, e a senha do MySQL */
          $this->conexao = new PDO($dsn, 'root', 'SANDRO.rd650');
     }

     /*Método que vai preparar para inserção no banco de dados, tendo como argumento classe que vai receber a permissão para efetivara inserção no SGBD mais a propriedade $model, que venho lá da classe PessoaControlle que vai levar os valores a serem inseridos no SGBD*/
     public function insert(PessoaModel $model)
     {
          /*Query a ser inserida na model, como os campos que ela vai afetar e os valores indeterminados*/
          $sql = "INSERT INTO pessoas (nome, cpf, datanascimento) VALUES (?, ?, ?)";
          /*A variavel $stmt vai receber como valor a chamda da propriedade conexao, e vai receber o método prepare que vai conter como arguemento a propriedade $sql, contendo a string com a query SQL */
          $stmt = $this->conexao->prepare($sql);
          /* Aqui a propriedade $stmt vai receber o método bindValue, que é resposanvel por receber os valores personalizados que venho pela obejto $model VINDO DA CONTROLLER. Cada bindValue vai alterar um campo da minha query string acima.*/
          $stmt->bindValue(1, $model->nome);
          $stmt->bindValue(2, $model->cpf);
          $stmt->bindValue(3, $model->data_nascimento);
          //propriedade que vai executar o codigo acima.
          $stmt->execute();
     }
     public function atualiza(PessoaModel $modelupadate) 
     {
          $sql = "UPDATE pessoas SET (nome, cpf, data_nascimento) VALUES ('?','?' ,'?,) WHERE = ?";
          $stmt = $this->conexao->prepare($sql);
          $stmt->bindValue(1, $modelupadate->nome);
          $stmt->bindValue(2, $modelupadate->cpf);
          $stmt->bindValue(3, $modelupadate->data_nascimento);
          
          $stmt->execute();
          //return $stmt->fetchAll(PDO::FETCH_CLASS);
     }

     /*Método que prepara para ser chamado, depois que cadastramos uma pessoa no nosso SGBD e lista na tela todos os cadatrados*/
     public function select()
     {
          /*Query sting a ser armanzenada na propriedade $sql para consultar a lista de pessoas no MySQL*/
          $sql = "SELECT * FROM pessoas";
          //Armazenando na propriedade o valor da query string da linha anterior
          $stmt = $this->conexao->prepare($sql);
          //Armazenando agora a execução quando for chamada la na camada model
          $stmt->execute();
          // retorno das linha em formato de Array associativo
          return $stmt->fetchAll(PDO::FETCH_CLASS);
     }
}
