<?php
    class Contact {
        // attributs    
        private $id_contact;
        private $nom_contact;
        private $courriel_contact;
        private $message_contact;
        private $id_type;
        // getters and setters
        //getters id_contact
        public function getIdContact(){ 
            return $id_contact;            
        } 
        //setter id_contact
        public function setIdContact($newId){
            $this->id_contact=$newId;              
        }
        //getters nom_contact
        public function getNom(){ 
            return $nom_contact;            
        } 
        //setter nom_contact
        public function setNom($newNom){
            $this->nom_contact=$newNom;              
        }
        //getters courriel_contact
        public function getCourriel(){ 
            return $courriel_contact;            
        } 
        //setter courriel_contact
        public function setCourriel($newCourriel){
            $this->courriel_contact=$newCourriel;              
        }
        //getters message_contact
        public function getMessage(){ 
            return $message_contact;            
        } 
        //setter message_contact
        public function setMessage($newMessage){
            $this->message_contact=$newMessage;              
        }
        //getters id_type
        public function getIdType(){ 
            return $id_type;            
        } 
        //setter id_type
        public function setIdType($newId){
            $this->id_type=$newId;              
        }
        public function addMessage($bdd){        
            $nom=$this->nom_contact;
            $courriel=$this->courriel_contact;
            $message=$this->message_contact;
            $type = $this->id_type;
            try
            {
                //requête ajout d'un contact
                $req = $bdd->prepare('INSERT INTO contact(nom_contact, courriel_contact, id_type, message_contact) 
                VALUES (:nom_contact, :courriel_contact, :id_type, :message_contact)');
                //éxécution de la requête SQL
                $req->execute(array(
                'nom_contact' => $nom,
                'courriel_contact' => $courriel,
                'id_type' => $type,
                'message_contact'=> $message,
                ));
            }
            catch(Exception $e)
            {
            //affichage d'une exception en cas d’erreur
            die('Erreur : '.$e->getMessage());
            }
        }
    }
?>