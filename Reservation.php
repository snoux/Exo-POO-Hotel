<?php

class Reservation {
    private Chambre $_chambre;
    private Client $_client;
    private string $_dateDebut;
    private string $_dateFin;

    //Constructeur pour définir une réservation//
    public function __construct(Chambre $chambre, Client $client, string $dateDebut, string $dateFin)
    {
        $this->_chambre = $chambre;
        $this->_client = $client;
        $this->_dateDebut = $dateDebut;
        $this->_dateFin = $dateFin;
        $this->_chambre->getHotel()->addReservation($this);
        $this->_client->addReservation($this);
    }

    //Getter et Setter//
    public function getChambre(): Chambre
    {
        return $this->_chambre;
    }
    public function setChambre(Chambre $chambre)
    {
        $this->_chambre = $chambre;
    }

    public function getClient(): Client
    {
        return $this->_client;
    }
    public function setClient(Client $client)
    {
        $this->_client = $client;
    }

    public function getDateDebut(): string
    {
        return $this->_dateDebut;
    }
    public function setDateDebut(string $dateDebut)
    {
        $this->_dateDebut = new DateTime($dateDebut);
    }

    public function getDateFin(): string
    {
        return $this->_dateFin;
    }
    public function setDateFin(string $dateFin)
    {
        $this->_dateFin = new DateTime($dateFin);
    }

    //Méthode __toString (client, hotel et chambre)
    public function __toString()
    {
        return $this->_client . " " . $this->_chambre->getHotel() . " " . $this->_chambre;
    }
}