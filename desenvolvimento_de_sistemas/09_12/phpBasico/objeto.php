<?php
    class Usuario {
        public $nome;
        public $cpf;
        public $endereco;

        function Usuario() {}
        function saudacao() { echo '<p>Olá mundo!</p>'; }
    }

    $joao = new Usuario();
    echo $joao -> saudacao();
?>
