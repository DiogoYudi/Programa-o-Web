<?php
require_once "../ConexaoBD.php";
    class ClienteModel{
        private $conexao;

        public function __construct($bd){
            $this->conexao = $bd;
        }

        public function getCliente(){
            return $this->conexao->executaSQL("SELECT * from clientes");
        }

        public function obterClientePorCodigo($codigo){
            return $this->conexao->executaSQL("SELECT * from clientes where codigo = '$codigo'");
        }

        public function adicionarCliente($nome, $codigo, $telefone){
            $comandoSQL = "INSERT into clientes(nome, codigo, telefone) values('$nome', '$codigo', '$telefone')";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function alterarClientes($nome, $telefone, $codigo){
            $comandoSQL = "UPDATE clientes SET nome='$nome', telefone='$telefone' where codigo='$codigo'";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function excluirCliente($codigo){
            $comandoSQL = "DELETE from clientes where codigo='$codigo'";
            return $this->conexao->executaComando($comandoSQL);
        }
    }
?>