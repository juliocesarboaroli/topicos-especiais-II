<?php
    class Session
    {
        public function VerificarSessao()
        {
            session_start();
            if (!isset($_SESSION['usuario']) and !isset($_SESSION['senha']) )
            {
                session_destroy();
                header("Location: ../../");
            }
        }
    }
?>