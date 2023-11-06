<?php

namespace models\classes;

use models\ClientsModele;

class Contact
{
    private string $id;
    private string $nomContact;
    private string $numero;
    private string $email;
    private string $clientId;
    private ClientsModele $clientModele;

    public function __construct(string $id, string $nomContact, string $numero, string $email, string $clientId)
    {
        $this->id = $id;
        $this->nomContact = $nomContact;
        $this->numero = $numero;
        $this->email = $email;
        $this->clientId = $clientId;
        $this->clientModele = new ClientsModele();
    }

    

    public function leClient(): Client
    {
        return $this->clientModele->getByClientId($this->clientId);
    }

    public function toString(): string
    {
        return "$this->nomContact, $this->numero, $this->email";
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNomContact(): string
    {
        return $this->nomContact;
    }

    /**
     * @param string $nomContact
     */
    public function setNomContact(string $nomContact): void
    {
        $this->nomContact = $nomContact;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }
}
