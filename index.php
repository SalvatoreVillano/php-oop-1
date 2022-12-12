<?php

class Movie
{
    public $titolo;
    public $genere;
    public $durata;


    function __construct(string $_titolo, string $_genere, int $_durata)
    {

        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;

    }
    public function getMovie()
    {
        return " Nome Film: " . $this->titolo . " Genere: " . $this->genere . " Durata: " . $this->durata . " Minuti " . "<br>";
    }
}


$movie1 = new Movie("Pinocchio", "Animazione", 114);
$movie2 = new Movie("Nope", "Thriller", 130);

echo $movie1->getMovie();
echo $movie2->getMovie();

?>