<?php
require_once __DIR__ . "/classes/movie.php";

$movie1 = new Movie("Memento","Thriller",133,"Guy Pearce",25544867);
$movie2 = new Movie("The Prestige","Drammatico",130,"Christian Bale",109676311 );

echo "<h2>Dettagli primo film</h2>
<p> Il titolo è: <strong>{$movie1->getTitolo()}</strong></p> <br>
<p>Il genere è: <strong>{$movie1->getGenere()}</strong></p> <br>
<p>La durata del film è: <strong>{$movie1->resetDurata($num)}</strong></p><br>
<p>Il protagonista è: <strong>{$movie1->getProtagonista()}</strong></p><br>
<p>L'incasso è di: <strong>{$movie1->getIncasso()}$</strong></p>";

echo " <h2>Dettagli secondo film</h2>
<p> Il titolo è: <strong>{$movie2->getTitolo()}</strong></p> <br>
<p>Il genere è: <strong>{$movie2->getGenere()}</strong></p> <br>
<p>La durata del film è: <strong>{$movie2->resetDurata($num)}</strong></p><br>
<p>Il protagonista è: <strong>{$movie2->getProtagonista()}</strong></p><br>
<p>L'incasso è di: <strong>{$movie2->getIncasso()}$</strong></p>";
