<?php

namespace models;

use models\base\SQL;
use models\classes\Contact;

class ContactModel extends SQL
{
    public function __construct()
    {
        parent::__construct('contact', 'id');
    }
    

    /**
     * Liste les contacts d'un client
     * @param string $clientId
     * @return Contact[]
     */
    public function lesContactsClient(string $clientId): array
    {
        $query = "SELECT * FROM contacts WHERE client_id = ?";
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$clientId]);
        return $stmt->fetchAll(\PDO::FETCH_CLASS, Contact::class);
    }

    /**
     * Ajoute un contact en base pour le client $clientId
     * @param Contact $unContact
     * @return string
     */
    public function creerContactClient(Contact $unContact): string
    {
        $query =  "INSERT INTO contacts (id, nom_contact, numero, email, clientId) VALUES (NULL, ?, ?, ?, ?)"; 
        $stmt = SQL::getPdo()->prepare($query);
        $stmt->execute([$unContact->getNomContact(), $unContact->getNumero(), $unContact->getEmail(), $unContact->getClientId()]);
        return $this->getPdo()->lastInsertId();
    }
}
