<?php
    class client{
        private $id_client;
        private $nom;
        private $prenom;
        private $age;
        private $email;

        public function __construct($nom, $prenom, $age, $email, $id_client = null){
            $this->id_client = $id_client;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
            $this->email = $email;
        }
        
        public function setIdClient($id_client){
            $this->id_client = $id_client;
        }

        public function setNom($nom){
            $this->nom = $nom;
        }

        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }

        public function setAge($age){
            $this->age = $age;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function getIdClient(){
            return $this->id_client;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getAge(){
            return $this->age;
        }

        public function getEmail(){
            return $this->email;
        }

        private function verifyemail(){
            if(!(filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL))){
                return "<p>erreur mail</p>";
            }

        }

        private function verifyvalueempty(){
            if(empty($this->getNom()) && empty($this->email)){
                return "<p>Des champs sont vide</p>";
            }

        }

        public function add_ddb(){
            $erreur = $this->verifyemail();
            if(isset($erreur)){
                return $erreur;
            }
            

        }

    }

?>