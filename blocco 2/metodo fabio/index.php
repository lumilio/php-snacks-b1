<?php
// helper function to die and dump
function dd($val)
{
  echo '<pre>';
  var_dump($val);
  echo '</pre>';
  die();
}


/* Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. */

$ads = [
  [
    'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
    'link' => 'https://www.google.com',
    'is_active' => true,
  ],
  [
    'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
    'link' => 'https://www.facebook.com',
    'is_active' => true,
  ],
  [
    'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
    'link' => 'https://codepen.io',
    'is_active' => false,
  ],
  [
    'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
    'link' => 'https://laravel.com',
    'is_active' => false,
  ],
  [
    'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
    'link' => 'https://www.php.net',
    'is_active' => true,
  ],

];

// Filtro gli elementi dell array che hanno is_active impostato su true
$activeAds = array_filter($ads, function ($element) {
  return $element['is_active'] == TRUE;
});

//dd($activeAds);
// Seleziono un elemento random dall'array usando array_rand e lo assegno ad una variabile
$advert = $activeAds[array_rand($activeAds)];

//dd($advert)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1 blocco 2</title>

<style>
  img {
    max-width: 100%;
    width: 200px;
    height: 400px;
    object-fit: cover;
    object-position: center;
  }
  .container {
    width: 900px;
    margin: auto;
  }
</style>
</head>

<body>

<!-- Stampo il risultato a schermo -->
  <section class="ads container">
    <h2>Ads</h2>
    <div class="advert">
      <a href="<?= $advert['link'] ?>">
        <img src="<?php echo $advert['image_path'] ?>" alt="">
      </a>
    </div>
  </section>

</body>

</html>