<?php
    namespace Login
    {
        class Login 
        {
            private $usuario;
            private $senha;

            function login($usuario, $senha)
            {
                $this->$usuario = $usuario;
                $this->$senha =  $senha;
            }
        }
    }

?>