<?php
    class ConexaoBD{
        private $conexao;

        function __construct(){
            try{
                $this->$conexao = new PDO("mysql:host=localhost;dbname=sistemaERP","root","");
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch (PDOException $e){
                die("Erro ao conectar com o banco de dados: " . $e->getMessage());
            }
        }

        public function executaSQL($comandoSQL){
            try{
                $acesso = $this->conexao->query($comandoSQL);
                $resultados = $acesso->fetchALL(PDO::FETCH_ASSOC);
                return $resultados;
            }
            catch(PDOException $e){
                die("Erro ao executar a consulta (select): ".$e->getMessage());
            }
        }

        public function executaComando($comandoSQL){
            try{
                $acesso = $this->conexao->prepare($comandoSQL);
                $acesso->execute();
                return true;
            }
            catch(PDO EXception $e){
                die("Erro ao executar o comando SQL: ".$e->getMessage());
            }
        } 
    }

    $banco = new ConexaoBD();
    $resultados = $banco->executaSQL("select * from clientes");
    $banco->executaComando("insert into clientes values (10,'CCC','4718742')")
?>