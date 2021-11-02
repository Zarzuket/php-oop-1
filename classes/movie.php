<?php

/**
 * Movie
 * classe che definisce un film con qualche info.
 */
class Movie{
    private $titolo;
    private $genere;
    private $durata;
    private $protagonista;
    private $incasso;

    /**
     * __construct
     *
     * @param  string $titolo // il nome del Film
     * @param  string $genere // il genere del Film
     * @param  int $durata // la durata del Film
     * @param  string $protagonista // il protagonista principale del film
     * @param  int $incasso // l'incasso che servirà per il metodo
     * @return void
     */
    function __construct($_titolo,$_genere,$_durata,$_protagonista,$_incasso)
    {
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
        $this->protagonista = $_protagonista;
        $this->incasso = $_incasso;
    }
    
    public function getTitolo(){
        return $this->titolo;
    }
    public function getGenere(){
        return $this->genere;
    }
    public function getDurata(){
        return $this->durata;
    }
    public function getProtagonista(){
        return $this->protagonista;
    }
    public function getIncasso(){
        return $this->incasso;
    }
    public function resetDurata($num){
        $num = "2h e ";
        if ($this->durata > 120){
            return $num . ($this->durata - 120);
        }
    }
}
