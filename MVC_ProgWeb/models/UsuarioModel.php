<?php
require_once "../ConexaoBD.php";
    class UsuarioModel{
        private $conexao;

        public function __construct($bd){
            $this->conexao = $bd;
        }

        public function obterUsuarios(){
            return $this->conexao->executaSQL("SELECT * from usuarios");
        }

        public function obterUsuarioPorId($idUsuario){
            return $this->conexao->executaSQL("SELECT * from usuarios where id = '$idUsuario'");
        }

        public function adicionarUsuario($nome, $cpf, $senha){
            $comandoSQL = "INSERT into usuarios(nome, cpf, senha) values('$nome', '$cpf', '$senha')";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function alterarUsuario($idUsuario, $nome, $cpf, $senha){
            $comandoSQL = "UPDATE usuarios set nome='$nome',cpf='$senha',senha='$senha' where id='$idUsuario'";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function excluirUsuario($idUsuario){
            $comandoSQL = "DELETE from usuarios where id='$idUsuario'";
            return $this->conexao->executaComando($comandoSQL);
        }
    }
?>