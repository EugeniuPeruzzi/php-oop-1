<?php 
    include __DIR__.'/db.php';
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
    <link rel="stylesheet" href="./style/style.css">
    <title>Php OOP 1</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center my-4">
                <h1>PhP OOP 1 Film database </h1>
            </div>
            <div class="col d-flex flex-wrap justify-content-center">
            
            <?php foreach ($array as $index => $movies) { ?>
                <!-- ciclo l'arrai dichiarato in db.php -->
                <div class="card text-bg-warning border-info border-3 m-3" style="width: 37rem;">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="card-title"><?php echo $movies -> titolo?></h2>
                        <div class="img-container">
                            <img class="" src="<?php echo $movies -> setPegi($movies -> pegi)?>" alt="">
                        </div>
                    </div>
                    <div class="card-body position-relative">
                        <h5>Genere: <?php echo $movies -> genere ?></h5>
                        <p>Anno uscita: <?php echo $movies -> anno?> in lingua <?php echo $movies -> lingua?></p>
                        <p><?php echo $movies -> raiting?></p>
                        <div class="prezzo position-absolute top-0 end-0 me-4">
                            <span><?php echo $movies -> prezzo?></span>
                        </div>
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>