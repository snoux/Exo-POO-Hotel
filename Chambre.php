<?php

class Chambre
{
    private int $_numero;
    private float $_prix;
    private bool $_estDispo;
    private bool $_wifi;
    private Hotel $_hotel;

                //Constructeur pour définir une chambre//
    public function __construct(int $numero, float $prix, bool $wifi, Hotel $hotel)
    {
        $this->_numero = $numero;
        $this->_prix = $prix;
        $this->_estDispo = False;
        $this->_wifi = $wifi;
        $this->_hotel = $hotel;
        $this->_hotel->addChambre($this);
    }

                //Getter et Setter//
    public function getNumero(): int
    {
        return $this->_numero;
    }
    public function setNumero(int $numero)
    {
        $this->_numero = $numero;
    }

    public function getPrix(): float
    {
        return $this->_prix;
    }
    public function setPrix(float $prix)
    {
        $this->_prix = $prix;
    }

    public function getEstDispo(): string
    {
        if($this->_estDispo == True)
        {
            return "DISPONIBLE";
        }
        else
        {
            return mb_strtoupper("Réservée");
        }
    }
    public function setEstDispo(bool $estDispo)
    {
        return $this->_estDispo = $estDispo;
    }

    public function getwifi(): string
    {
        if($this->_wifi == True)
        {
            return "Oui";
        }
        else
        {
            return "Non";
        }
    }
    public function setwifi(bool $wifi)
    {
        $this->_wifi = $wifi;
    }

    public function getHotel(): Hotel
    {
        return $this->_hotel;
    }
    public function setHotel(Hotel $hotel)
    {
        $this->_hotel = $hotel;
    }

}
