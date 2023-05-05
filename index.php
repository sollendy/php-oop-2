<?php 
require_once './db.php';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pet sciop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/df25a5e9aa.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="text-center">
        <h1>pet sciop</h1>
        <!-- <h2>ciuri di primavera</h2> -->
    </header>
    <main>
        <section class="pt-3 d-flex gap-2 px-2">
            <!-- <h2 class="ms-5">reparto cani</h2> -->
            <?php foreach ($prodotti as $prodotto) {
                ?>
            <div class="card m-auto" style="width: 18rem;">
              <img src="<?=$prodotto->immag?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?=$prodotto->nome?></h5>
                <b class="card-text"><?=$prodotto->prezzo?>&euro;</b>
                <div class="text-center"><i class="<?=$prodotto->categoria->icona?>"></i></div>
              </div>
            </div>
            <?php }?>
        </section>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>