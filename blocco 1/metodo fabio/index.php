<?php
/*
Snack 1:
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 

Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  

*/

$matches = [
  [
    'home_team' => 'Team 1',
    'guest_team' => 'Team 2',
    'home_points' => rand(1, 100),
    'guest_points' => rand(1, 100)
  ],
  [
    'home_team' => 'Team 3',
    'guest_team' => 'Team 4',
    'home_points' => rand(1, 100),
    'guest_points' => rand(1, 100)
  ],
  [
    'home_team' => 'Team 5',
    'guest_team' => 'Team 6',
    'home_points' => rand(1, 100),
    'guest_points' => rand(1, 100)
  ],
  [
    'home_team' => 'Team 7',
    'guest_team' => 'Team 8',
    'home_points' => rand(1, 100),
    'guest_points' => rand(1, 100)
  ],
];



/* 
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['mail'])) {
  $name = $_GET['name'];
  $age = intval($_GET['age']);
  $mail = $_GET['mail'];

  var_dump($name, $age, $mail);

  if (strlen($name) > 3 &&  is_numeric($age) && strpos($mail, '@') && strpos($mail, '.')) {
    echo 'Accesso Riuscito';
  } else {
    echo 'Accesso negato!';
  }
}

/* 
Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

*/

$posts = [

  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 1'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 2'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 4'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 5'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 6'
    ]
  ],
];

$keys = array_keys($posts);
var_dump($keys);




/*
4 
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/



$numbers_array = [];

while (count($numbers_array) < 15) {
  $random_number = rand(1, 100);
  if (!in_array($random_number, $numbers_array)) {
    // $numbers_array[] = $random_number
    array_push($numbers_array, $random_number);
  }
}
echo '<pre>';
var_dump($numbers_array);
echo '</pre>';

/* 
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
*/


$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui minus quae, ut tenetur doloremque molestias corporis laboriosam repudiandae modi tempore deleniti neque assumenda repellat nostrum quod, deserunt, aut quidem. Repellendus quaerat ea accusamus magnam officia impedit molestias sit repudiandae, culpa quisquam voluptatibus omnis, consectetur recusandae similique maiores esse ex vero. Cum omnis, sunt obcaecati dicta illum quia, laboriosam repellat quaerat ratione nostrum quas odio animi! Laudantium molestias, necessitatibus impedit enim debitis inventore commodi ex facere, nobis quo odio nam praesentium eveniet itaque. Quod esse rerum error, earum quo quae reprehenderit eveniet velit vel facere facilis natus ea culpa porro sunt at ex odit ut eaque sapiente consequuntur, magnam laudantium incidunt? Tenetur, delectus. Consectetur placeat eveniet ad recusandae deserunt illo. Impedit aperiam voluptatibus ipsa, et obcaecati consectetur tempore nam vero eaque maxime? Hic, facere. Molestias modi corrupti nobis necessitatibus! Esse eveniet laboriosam exercitationem est nobis in, assumenda enim neque accusantium eum qui velit possimus at ipsum illo minima? Autem accusamus labore dolorum quis iusto ad. Commodi, sint quaerat. Sunt, ab voluptatibus id quos dolorem, numquam laboriosam, officiis rerum quisquam error sapiente repudiandae possimus distinctio harum suscipit necessitatibus beatae alias sit accusamus modi. Voluptas commodi assumenda nam odit corporis, quibusdam nostrum aut.';


$paragraphs = explode('.', $paragraph);




/* 

Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
$db = [
  'teachers' => [
    [
      'name' => 'Michele',
      'lastname' => 'Papagni'
    ],
    [
      'name' => 'Fabio',
      'lastname' => 'Forghieri'
    ]
  ],
  'pm' => [
    [
      'name' => 'Roberto',
      'lastname' => 'Marazzini'
    ],
    [
      'name' => 'Federico',
      'lastname' => 'Pellegrini'
    ]
  ]
];

/* 
Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/


$students = [
  [
    'name' => 'Alessandro',
    'lastname' => 'Del re',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Chaira',
    'lastname' => 'Papagni',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Valentna',
    'lastname' => 'Trebbi',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Andrea',
    'lastname' => 'Bellatreccia',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ],
  [
    'name' => 'Gaetano',
    'lastname' => 'Sciurti',
    'votes' => [
      rand(1, 10),
      rand(1, 10),
      rand(1, 10),
    ]
  ]

]

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Snacks 1</title>

  <style>

  </style>
</head>

<body>


  <section class="snack1">
    <h2>Snack 1</h2>

    <?php for ($i = 0; $i < count($matches); $i++) :
      $match = $matches[$i];
      # Olimpia Milano - Cantù | 55-60 
    ?>

      <p><?php echo $match['home_team']  . ' - ' . $match['home_team'] . ' | ' .  $match['home_points'] . ' - ' . $match['guest_points'] ?> </p>



    <?php endfor; ?>

  </section>


  <section class="snack3">
    <h2>Snack 3</h2>

    <?php for ($i = 0; $i < count($keys); $i++) :
      $key = $keys[$i]; ?>

      <h3><?php echo $key; ?></h3>

      <?php for ($j = 0; $j < count($posts[$key]); $j++) :
        /* echo '<pre>';
      var_dump($posts[$key][$j]);
      echo '</pre>';
      die(); */
        $post = $posts[$key][$j]; ?>

        <h4><?php echo $post['title']; ?></h4>
        <p><?php echo $post['text']; ?></p>

    <?php
      endfor;
    endfor;


    ?>
  </section>


  <section class="sn5">
    <h2>Snack 4</h2>

    <?php for ($i = 0; $i < count($paragraphs); $i++) : ?>

      <p><?= $paragraphs[$i]; ?>.</p>

    <?php endfor; ?>
  </section>



  <section class="sn6">

    <h2>Snack 6</h2>


    <?php
    $keys = array_keys($db);
    for ($i = 0; $i < count($keys); $i++) {
      $key = $keys[$i];
    ?>

      <div style="background-color: <?php echo $key === 'teachers' ? 'grey' : 'green' ?> ">

        <h3><?= $key; ?></h3>

        <?php for ($j = 0; $j < count($db[$key]); $j++) {
          $user = $db[$key][$j];
        ?>
          <p><?= $user['name']  . ' '  . $user['lastname'] ?></p>

        <?php
        }
        ?>


      </div>


    <?php }

    ?>
  </section>


  <div class="sn7">
    <h2>Snack 7</h2>


    <?php for ($i = 0; $i < count($students); $i++) : ?>
      <h4><?= $students[$i]['name'] . ' ' . $students[$i]['lastname'] ?> </h4>
      <p> <?= array_sum($students[$i]['votes']) / count($students[$i]['votes'])  ?> </p>

    <?php endfor; ?>
  </div>


  <?php foreach ($db as $key => $users) : ?>
    <h2><?= $key; ?></h2>

    <?php foreach ($users as $user) : ?>
      <h4> <?= $user['name'] ?> <?= $user['lastname'] ?></h4>
    <?php endforeach; ?>

  <?php endforeach; ?>


</body>

</html>