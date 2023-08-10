<?php 

class Jouer {
    private Acteur $acteur;
    private Film $film;
    private Role $role;

    public function __construct(Acteur $acteur,Film $film,Role $role) {
        $this->acteur = $acteur;
        $this->film = $film;
        $this->role = $role;

        $acteur->ajouterCasting($this);
        $film->ajouterCasting($this);
        $role->ajouterCasting($this);
    }

    public function afficherRole()
    {
        echo "Film: " . $this->film->getTitre() . "<br>";
        echo "Acteur : " . $this->acteur->getNom() . "<br>";
        echo "Rôle : " . $this->role->getNom() . "<br>";
    }

    public function getActeur()
    {
        return $this->acteur;
    }


    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

 
    public function getFilm()
    {
        return $this->film;
    }

     
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    public function getRole()
    {
        return $this->role;
    }

   
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}


?>