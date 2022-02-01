<?php
// connection to BDD
include 'utils/connectBDD.php';
// call view
include 'contact.html';
// call model contact
include 'model/class_contact.php';
// call model type
include 'model/class_type.php';
// test if fields are completed
if(isset($_POST['name']) AND isset($_POST['email']) AND isset($_POST['message'])){
    // create new contact
    $message=new Contact();
    // récupération des valeurs contenues dans champs de formulaire
    $message->setNom($_POST['name']);
    $message->setCourriel($_POST['email']);
    $message->setMessage($_POST['message']);
    $message->setIdType($_POST['choice']);
    //ajout du message
    $message->addMessage($bdd);
    echo 'le message a été envoyé';
}else{
    echo "erreur";
}
?>