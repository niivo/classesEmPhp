<?php
    class Pessoa{

        private $nome;

        
        public function mudarNome($novoNome){
            $this->nome=$novoNome;
        }
        
        public function obterNome(){
            return $this->nome;
        }


    }