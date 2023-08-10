<?php 

class Acteur extends Personne {
    
    private array $filmographie;

    
    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->filmographie = array();
    }

    // methode ajoute casting
    public function ajouterCasting(Jouer $casting) {
        $this->filmographie[] = $casting;
    }
    
    // méthode afficher les films
    public function afficherFilmographie(): string {
        $result = "<h3>Filmographie de " . $this->getPrenom() . " " . $this->getNom() . ":</h3> ";
        foreach ($this->filmographie as $item) {
            $result .= $item->getFilm()->getTitre() . " (" . $item->getRole()->getNom() . "),";
        }
        return $result;
    }

    //methode pour ajout film
    public function ajouterFilm(Film $film) {
        $this->filmographie[] = $film;
    }

}
?>