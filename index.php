<?php 
    // pegi : 3 7 12 16 18
   
    class Movie {
        public $titolo;
        public $genere;
        public $lingua;
        public $anno;
        public $prezzo;
        public $raiting;
        public $pegi;
        
        function __construct($titolo , $genere , $lingua , $anno , $prezzo , $raiting , $pegi){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->lingua = $lingua;
            $this->anno = $anno;
            $this->prezzo = $prezzo;
            $this->raiting = $raiting;
            $this->pegi = isset($pegi);
        }
       
        public function setPegi($pegi){
            if ($this->pegi >= 18 ){
                echo 'Visione Adatta a un pubblico adulto';
            }
            else if ($this->pegi < 18 && $this->pegi >= 16) {
                echo 'Visione non consigliata ai minori di 16 anni';
            }
            else if ($this->pegi < 16 && $this->pegi >= 12) {
                echo 'Visione non consigliata ai minori di 12 anni';
            }
            else if ($this->pegi < 12 && $this->pegi >= 7) {
                echo 'Visione non consigliata ai minori di 7 anni';
            }
            else if ($this->pegi < 3 && $this->pegi >= 7) {
                echo 'Visione non consigliata ai minori di 3 anni';
            }
        }
    }
    
    //generi
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
    // film
    $starWars = new Movie('Star Wars - Il risveglio della Forza' , $action->genere, 'Inglese', 2015 , 12.50.'$'  , 'Coming Soon 3.5/5' , 12);
    echo $starWars ->titolo.' -- '.$starWars->genere.' -- '.$starWars->lingua.' -- '.$starWars->anno.' -- '.$starWars->prezzo.' -- '.$starWars->raiting.' -- ';
    $starWars ->setPegi($starWars -> pegi);
    
    $cars = new Movie('Cars - Motori ruggenti' , $familyFriendly->genere.'/'.$comedy->genere, 'Inglese', 2006 , 9.99.'$'  , 'MyMovies 3.1/5' , 3);
    echo $cars ->titolo.' -- '.$cars->genere.' -- '.$cars->lingua.' -- '.$cars->anno.' -- '.$cars->prezzo.' -- '.$cars->raiting.' -- ';
    $cars ->setPegi($cars -> pegi);
    ?>
<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
    - è definita una classe ‘Movie’ OK
    => all'interno della classe sono dichiarate delle variabili d'istanza OK
    => all'interno della classe è definito un costruttore OK
    => all'interno della classe è definito almeno un metodo OK
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà. Non potete utilizzare il var_dump per stampare le proprietà dell'oggetto ma le dovete richiamare.
 -->



<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

</body>

</html>