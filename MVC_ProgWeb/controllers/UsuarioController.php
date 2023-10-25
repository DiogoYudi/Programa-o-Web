<?php
require_once('../models/UsuarioModel.php');
    class UsuarioController{
        private $usuarioModelo;

        public function __construct(UsuarioModel $usuarioModelo){
            $this->usuarioModelo = new $usuarioModelo;
        }

        public function listarUsuarios(){
            $usuarios = $this->usuarioModelo->obterUsuarios();
            include '../views/Usuarios.php';
        }
    }
?>