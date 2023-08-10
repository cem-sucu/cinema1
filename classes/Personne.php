<?php 
class Personne {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    //methode toString
    public function __toString() {
        return $this->prenom . " " . $this->nom . " (" . $this->sexe . ")" . " neé le " . $this->dateNaissance->format("d-m-Y");
    }
 
    public function getNom()
    {
        return $this->nom;
    }

 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

  
    public function getSexe()
    {
        return $this->sexe;
    }

  
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }


    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

   
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }
}

?>