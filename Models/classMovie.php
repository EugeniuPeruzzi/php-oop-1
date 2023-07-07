<?php 

    //Import classGenere
    require __DIR__.'/classGenere.php';

    class Movie {
        public $titolo; //ok
        public $genere; //ok
        public $lingua; //ok
        public $anno; //ok
        public $prezzo; //ok
        public $raiting;//ok
        public $pegi; //ok
        
        function __construct($titolo , $genere , $lingua , $anno , $prezzo , $raiting , $pegi){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->lingua = $lingua;
            $this->anno = $anno;
            $this->prezzo = $prezzo;
            $this->raiting = $raiting;
            $this->pegi = $pegi;
        }
        // funzione che gestisce il pegi, in base al valore dato lui esegue il return e piazza l'immagine 
        public function setPegi($pegi){
            
            if ($this->pegi < 18 && $this->pegi >= 16) {
                return 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Mibact_Minori18anni.svg/60px-Mibact_Minori18anni.svg.png';
            }
            else if ($this->pegi < 16 && $this->pegi >= 12) {
                return 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Mibact_Minori14anni.svg/60px-Mibact_Minori14anni.svg.png';
            }
            else if ($this->pegi < 12 && $this->pegi >= 6) {
                return 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Mibact_Minori6anni.svg/60px-Mibact_Minori6anni.svg.png';
            }
            else if ($this->pegi <= 5 ) {
                return 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Mibact_Tutti.svg/60px-Mibact_Tutti.svg.png';
            }
        }
    }
    //dichiaro i film che poi vengono passati nell'array 
    $starWars = new Movie('Star Wars - Il risveglio della Forza' , $action->genere, 'Inglese', 2015 , 12.50.'$'  , 'Coming Soon --> 3.5/5' , 12);
    $cars = new Movie('Cars - Motori ruggenti' , $familyFriendly->genere.'/'.$comedy->genere, 'Inglese', 2006 , 9.99.'$'  , 'MyMovies  --> 3.1/5' , 3);
    $transformers = new Movie('Trasformes 4 - L\'era dell\'estinzione' , $action->genere.'/'.$scienceFiction->genere, 'Inglese', 2014 , 24.99.'$'  , 'Coming Soon --> 3.9/5' , 16);
    $quoVado = new Movie('Quo Vado?', $comedy->genere, 'Italiano', 2016 , 12.99.'$' , 'Coming Soon --> 4.2/5', 8 );

?>