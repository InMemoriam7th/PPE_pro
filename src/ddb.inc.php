<?php
    class ddb{
        const host = "localhost";
        const dbname = "client_ligue";
        const user = "root";
        const password = "";
    

        private function connection(){
            try{
                $bdd_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                $bdd = new PDO('mysql:host='.self::host.';dbname='.self::dbname.'', self::user, self::password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$bdd_options));
                return $bdd;
            }catch(Exception $e){
                print '<p>Impossible de se connecter a la base de donnée</p>';
            }
            
        }
    
    
        public function insert($sql_requete, $arg_sql){
            $bdd = $this->connection();
            if(isset($bdd)){
                $req = $bdd->prepare($sql_requete);
                $req->execute($arg_sql);
                $req->closeCursor();
                return true;
            }
            return false;
        }
    
        public function select($sql_requete){
            $bdd = $this->connection();
            if(isset($bdd)){
                $req = $bdd->prepare($sql_requete);
                $req->execute();
                $result = $req->fetchAll();
                $req->closeCursor();
                return $result;
            }
        }
    
        public function update($sql_requete, $arg_sql){
            $bdd = $this->connection();
            if(isset($bdd)){
                $req = $bdd->prepare($sql_requete);
                $req->execute($arg_sql);
                $req->closeCursor();
                return true;
            }
            return false;
        }
    
        public function delete($sql_requete, $arg_sql){
            $bdd = $this->connection();
            if(isset($bdd)){
                $req = $bdd->prepare($sql_requete);
                $req->execute($arg_sql);
                $req->closeCursor();
                return true;
            }
            return false;
        }
        
    }
?>