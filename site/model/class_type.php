<?php
    class Type {
        // attributs    
        private $id_type;
        private $nom_type;
        // getters and setters
        //getters id_type
        public function getIdType(){ 
            return $id_type;            
        } 
        //setter id_type
        public function setIdType($newId){
            $this->id_type=$newId;              
        }
        //getters nom_type
        public function getNomType(){ 
            return $nom_type;            
        } 
        //setter nom_type
        public function setNomType($newNom){
            $this->nom_type=$newNom;              
        }
        
        public function addIdType($bdd){ 
            try
            {
               //requête pour stocker le contenu de toute la table type
               $reponse = $bdd->query('SELECT * FROM type');
               //parcours du résultat de la requête
               while($donnees = $reponse->fetch())
               {
                  //liste deroulante <select> html
                  echo '<option value="'.$donnees['id_type'].'">'.$donnees['nom_type'].'</option>';
               }
            }
            catch(Exception $e)
            {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
            }       
           
    }
    }
?>