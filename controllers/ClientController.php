<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use models\ContactModel;
use utils\Template;

class ClientController extends WebController
{
    private $clientModel;
    private $contactModel;

    function __construct(){
        $this->clientModel = new ClientsModele();
        $this->contactModel = new ContactModel();
    }


    function listeClient()
    {
        
        $liste = $this->clientModel->liste();

            return Template::render("views/liste/client.php", array('liste' => $liste));

    }
    


    function recherche($chaine){
        $chaine = isset($_GET['chaine']) ? $_GET['chaine'] : '';
        $nbligne = isset($_GET['amount']) ? $_GET['amount'] : 500;
        $numpage = isset($_GET['page']) ? $_GET['page'] :0;
        $recherche = $this->clientModel->recherche($chaine, $nbligne, $numpage);
        
        return Template::render("views/liste/client.php", array('liste'=> $recherche));
    }

    public function fiche($id)
    {
        // À compléter avec les bons appels de méthode.
        $client = $this->clientModel->getByClientId($id);
        $contacts = $this->clientModel->lesContacts($id);
  
        // Affichez le client dans la vue
        return Template::render("views/fiche/client.php", ["client" => $client, "contacts" => $contacts]);
    }

    
    

}
