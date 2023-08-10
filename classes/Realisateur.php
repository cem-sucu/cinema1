<?php

class Realisateur extends Personne {
    private array $filmographie;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->filmographie = array();
    }
    

    // methoode ajoute casting
    public function ajouterCasting(Jouer $casting) {
        $this->filmographie[] = $casting;
    }
 
    public function getFilmographie()
    {
        return $this->filmographie;
    }
    // Méthode toString
    public function __toString() {
        return "Le réalisateur : " . $this->getNom() . " " . $this->getPrenom() . " (" . $this->getSexe() . ")" . " né le " . $this->getDateNaissance()->format("d-m-Y");
    }

    // Méthode pour ajouter un film à la filmographie
    public function ajouterFilm($film) {
        $this->filmographie[] = $film;
    }

    // Méthode pour afficher les films du réalisateur
    public function afficherFilms(): string {
        $result = "<h3>Films du réalisateur " . $this->getPrenom() . " " . $this->getNom() . "</h3>";
    foreach ($this->filmographie as $film) {
        $result .= $film->getTitre() . "<br>";
    }
    return $result;
}


    // Méthode pour afficher la filmographie
    public function afficherFilmographie():string {
        $filmographie = "Filmographie de " . $this->getNom() . " : ";
        foreach ($this->filmographie as $film) {
            $filmographie .= $film->getTitre();
        }
        return $filmographie;
    }

    
}

?>