<!-- Stampare a schermo, attraverso il foreach, tutti gli elementi passati in GET. -->



<?php


foreach($_GET as $key => $value) {
  echo "<p>{$key} : {$value}</p>";
}

?>





