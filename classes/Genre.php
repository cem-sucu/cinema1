<?php

class Genre{
    private string $nom;
    private array $films;

    public function __construct(string $nom){
        $this->nom=$nom;	
        $this->films=[];
    }
    


    public function getNom():string{
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }


    public function __toString() {
        return "nom : " . $this->getNom();
    }


    public function addFilm(Film $film) {
        $this->films[] = $film;
    }
    


    public function afficherFilms() {
        $result = "<h3>Film du nom " . $this->nom . "</h3>";
        foreach ($this->films as $film) {
             $result .= $film . "<br>";
        }
        return $result;
    }

}



?>