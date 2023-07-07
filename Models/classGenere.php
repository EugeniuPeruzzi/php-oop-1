<?php 
class Generi {
    public $genere;
    function __construct($genere){
        $this->genere = $genere;
    }
}

$scienceFiction = new Generi ('Sci/Fi');
$action = new Generi ('Action');
$familyFriendly = new Generi ('Family Friendly');
$comedy = new Generi ('Comedy');

?>