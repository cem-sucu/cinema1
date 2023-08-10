<?php

class Film{

    //TODO je créé mes attribut
    private string $titre;
    private int $duree;
    private string $resume;
    private DateTime $dateSortie;
    private Genre $genre;
    private Realisateur $realisateur;
    private array $castings;


    //TODO le constructor
    public function __construct(string $titre, int $duree, string $resume, string $dateSortie, Genre $genre, Realisateur $realisateur) {
        $this->titre = $titre;
        $this->duree = $duree;
        $this->resume = $resume;
        $this->dateSortie = new DateTime($dateSortie);
        $this->genre = $genre;
        $this->realisateur = $realisateur;

        //POur Ajouter le film dans liste genre
        $this->genre->addFilm($this);

        //et jouter le film dans liste réalisateur
        $this->realisateur->ajouterFilm($this);
        $this->castings = array();
    }



    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of duree
     */ 
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set the value of duree
     *
     * @return  self
     */ 
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get the value of resume
     */ 
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @return  self
     */ 
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of dateSortie
     */ 
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set the value of dateSortie
     *
     * @return  self
     */ 
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }  
    
    
    //TODO methode ajouter acteur
    public function ajouterCasting(Jouer $casting) {
        $this->castings[] = $casting;
    }

    //TODO Methode afficher casting
    public function afficherCasting(): string {
        $result = "<h3>Acteurs ayant joué dans : " . $this->getTitre() . "</h3>";
        foreach ($this->castings as $casting) {
            $result .= $casting->getActeur()->getNom() . " (" . $casting->getRole()->getNom() . "), ";
        }
        return $result;
    }
    

    //TODO la _tostring
    public function __toString()
    {
        return "<strong> Le Film </strong>: ".$this->getTitre() ." d'une duréé de " .$this->getDuree() ." minutes, sorti le " .$this->getDateSortie()->format("d-m-Y") .".<br>" . " Son resumé : " .$this->getResume();
    }

}



?>