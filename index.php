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
            $this->pegi = $pegi;
        }
       
        public function setPegi($pegi){
            if ($this->pegi >= 18 ){
                return 'Visione Adatta a un pubblico adulto';
            }
            else if ($this->pegi < 18 && $this->pegi >= 16) {
                return 'Visione non consigliata ai minori di 16 anni';
            }
            else if ($this->pegi < 16 && $this->pegi >= 12) {
                return 'Visione non consigliata ai minori di 12 anni';
            }
            else if ($this->pegi < 12 && $this->pegi >= 6) {
                return 'Visione non consigliata ai minori di 7 anni';
            }
            else if ($this->pegi <= 5 ) {
                return 'Visione non consigliata ai minori di 3 anni';
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
    echo $starWars ->titolo.' -- '.$starWars->genere.' -- '.$starWars->lingua.' -- '.$starWars->anno.' -- '.$starWars->prezzo.' -- '.$starWars->raiting.' -- '.$starWars->setPegi($starWars->pegi).'</br>'.'</br>'.'</br>';
    
    $cars = new Movie('Cars - Motori ruggenti' , $familyFriendly->genere.'/'.$comedy->genere, 'Inglese', 2006 , 9.99.'$'  , 'MyMovies 3.1/5' , 3);
    echo $cars ->titolo.' -- '.$cars->genere.' -- '.$cars->lingua.' -- '.$cars->anno.' -- '.$cars->prezzo.' -- '.$cars->raiting.' -- '.$cars->setPegi($cars->pegi).'</br>'.'</br>'.'</br>';

    $transformers = new Movie('Trasformes 4 - L\'era dell\'estinzione' , $action->genere.'/'.$scienceFiction->genere, 'Inglese', 2014 , 24.99.'$'  , 'Coming Soon 3.9/5' , 16);
    echo $transformers ->titolo.' -- '.$transformers->genere.' -- '.$transformers->lingua.' -- '.$transformers->anno.' -- '.$transformers->prezzo.' -- '.$transformers->raiting.' -- '.$transformers->setPegi($transformers->pegi).'</br>'.'</br>'.'</br>';
    ?>



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