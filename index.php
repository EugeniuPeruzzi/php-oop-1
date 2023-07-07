<?php 
    class Movie {
        public $titolo;
        public $genere;
        public $lingua;
        public $anno;
        public $prezzo;
        public $sottotitoli;
        public $raiting;
        
        function __construct($titolo , $genere , $lingua , $anno , $prezzo , $sottotitoli, $raiting){
            $this->titolo = $titolo;
            $this->genere = $genere;
            $this->lingua = $lingua;
            $this->anno = $anno;
            $this->prezzo = $prezzo;
            $this->sottotitoli = $sottotitoli;
            $this->raiting = $raiting;
        }
    }

    $starWars = new Movie('Star Wars - Il risveglio della Forza' , 'Sci-Fi/Action' , 'Inglese', 2015 , 12.50.'$' , false , 'Coming Soon 3.5/5');

    echo $starWars -> prezzo ;
?>
<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’ OK
=> all'interno della classe sono dichiarate delle variabili d'istanza OK
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
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