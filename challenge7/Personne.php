<?php

class Personne
{
    private string $lastname = '';
    private string $firstname = '';
    private string $adress = '';
    private string $date = '';

    public function __construct($lastname, $firstname, $adress, $date)
    {
        $this->lastname = $lastname ;
        $this->firstname = $firstname ;
        $this->adress = $adress ;
        $this->date = $date ;
    }

    public function getInfosPersonne(): string
    {
        return 'Nom : ' . $this->lastname . ', Prénom : ' . $this->firstname . ', Adresse : ' . $this->adress . ', Date de naissance : ' . $this->date . ', Age : ' . ($this->ageCalculator($this->date)) . 'ans.'  ;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress ;
        return $this;
    }

    public function ageCalculator(string $date): int
    {
        $date = new DateTime($date);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
}

?>