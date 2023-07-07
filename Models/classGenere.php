<?php 
class Generi {
    public $genere;
    function __construct($genere){
        $this->genere = $genere;
    }
}
// dichiaro i generi cosicche li richiamo nel new Movies
$scienceFiction = new Generi ('Sci-Fi');
$action = new Generi ('Action');
$familyFriendly = new Generi ('Family Friendly');
$comedy = new Generi ('Comedy');

?>