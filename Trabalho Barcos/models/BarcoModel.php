<?php
require_once "../ConexaoBD.php";
    class BarcoModel{
        private $conexao;

        public function __construct($bd){
            $this->conexao = $bd;
        }

        public function getBarco(){
            return $this->conexao->executaSQL("SELECT * from barcos");
        }

        public function adicionarBarco($codigo, $modelo, $fabricante, $opcionais, $cor){
            $comandoSQL = "INSERT into barcos(codigo, modelo, fabricante, opcionais, cor) values('$codigo', '$modelo', '$fabricante', '$opcionais', '$cor')";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function alterarBarco($codigo, $modelo, $fabricante, $opcionais, $cor){
            $comandoSQL = "UPDATE barcos SET codigo='$codigo', modelo='$modelo', fabricante='$fabricante', opcionais='$opcionais', cor='$cor' where codigo='$codigo'";
            return $this->conexao->executaComando($comandoSQL);
        }

        public function excluirBarco($codigo){
            $comandoSQL = "DELETE from barcos where codigo='$codigo'";
            return $this->conexao->executaComando($comandoSQL);
        }
    }
?>