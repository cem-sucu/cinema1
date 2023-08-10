<?php
spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name . '.php';
});

// realisateur
$realisateur1 = new Realisateur("Benoit", "Damond", "H", "1841-03-10" );
$realisateur2 = new Realisateur("Lincoln ", " Abraham ", " H ", "1900-10-10");
echo $realisateur1 ."<br>";
echo $realisateur2 ."<br>";

//genre 
$genre1 = new Genre("Action");
$genre2 = new Genre("Aventure");
$genre3 = new Genre("Animation");

// film
$film1 = new Film("Hitman", 121, "Un assasin expert dans tout", "2000-01-08", $genre1, $realisateur1);
$film2 = new Film("Batman", 134, "Le justicier chauve-souris masqué", "1510-01-01", $genre2, $realisateur2);
$film3 = new Film("Spiderman", 221, "L'homme araigné", "1900-01-01", $genre2, $realisateur2);
$film4 = new Film("Superman", 221, "L'homme le plus fort de l'univers", "1310-10-10", $genre2, $realisateur2);


//affiche les films
echo $film1."<br><br>";
echo $film2."<br><br>";
echo $film3."<br><br>";

// Afficher les films par genre
echo $genre1->afficherFilms();
echo $genre2->afficherFilms();

// Afficher les films d'un réalisateur
echo $realisateur1->afficherFilms();
echo $realisateur2->afficherFilms();

// actyeur
$acteur1 = new Acteur("Depp", "Johnny", "H", "1900-01-01");
$acteur2 = new Acteur("Jason ", " Statham ", " H ", "1992-05-10");
$acteur3 = new Acteur("Portman ", " Nathalie ", " F ", "1910-07-07");
$acteur4 = new Acteur("Bale ", " Christian ", " H ", "2001-01-03");
$acteur5 = new Acteur("50 ", " cent ", " H ", "2020-10-03");



// role 
$role1 = new Role("Ursula");
$role2 = new Role("Harrys");
$role3 = new Role("Clark");
$role4 = new Role("Padmé Amidala");
$role5 = new Role("Patrick");
$role6 = new Role("Batman");
$role7 = new Role("Bruce Wayne");
$role8 = new Role("Spiderman");
$role9 = new Role("Peter Parker");


// Création objet Jouer
$jouer3 = new Jouer($acteur4, $film2, $role2);
$jouer4 = new Jouer($acteur5, $film3, $role9);
$jouer5 = new Jouer($acteur3, $film1, $role4);
$jouer6 = new Jouer($acteur2, $film2, $role2);
$jouer7 = new Jouer($acteur1, $film4, $role5);
$jouer8 = new Jouer($acteur4, $film2, $role7);




// afficher tout la filmographie d'un acteur
echo $acteur1->afficherFilmographie();
echo $acteur2->afficherFilmographie();
echo $acteur3->afficherFilmographie();


//afficher les rôle des acteur dans un film
echo $film1->afficherCasting();
echo $film2->afficherCasting();
echo $film3->afficherCasting();




?>