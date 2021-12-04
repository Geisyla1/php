<?php
    class usuario{
        private $id;
        private $nome;
        private $email;

        public function getId(){
            return $this->id;
        }
        public function setId($i){
            $this->id = trim($i);
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($n){
            $this->nome = trim($n);
        }
        public function getEmail(){
            return $this->email;
        }
        public function setEmail($e){
            $this->email = strtolower(trim($e));
        }
    }

    interface usuarioDao{
        public function add(usuario $u);
        public function findAll();
        public function findByEmail($email);
        public function findById($id);
        public function update(usuario $u);
        public function delete($id);
    }