<?php

$name = $_GET['name'];

$guests_list = [
  
  'Chiara',
  'Fabiola',
  'Tiziano',
  'Fabio',
  'Alessandro',
  'Luca',
  'Filipo',
  'Michele'
  
];

if(in_array($name, $guests_list)) {
  echo 'Welcome you are!';
} else {
  echo 'Entry forbidden, dark side you are!';
}