<?php
namespace controllers;

use controllers\base\WebController;
use models\ClientsModele;
use utils\Template;

class ClientController extends WebController
{
    private $clientModel;

    function __construct(){
        $this->clientModel = new ClientsModele();
    }


    function listeClient()
    {
        
        $liste = $this->clientModel->liste();

            return Template::render("views/liste/client.php", array('liste' => $liste));

    }

    function recherche($chaine){

        $recherche = $this->clientModel->recherche($chaine);

        return Template::render("views/liste/client.php", array('liste'=> $recherche));
    }
}
