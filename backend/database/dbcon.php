<?php
try {
 $GLOBALS['db'] = new PDO('mysql:host=localhost;dbname=recide;charset=utf8','root', 'root');
}
catch (PDOException $e){
  echo $e->getMessage();
}

/*try {
 $GLOBALS['db'] = new PDO('mysql:host=localhost;dbname=mukemmel_recide;charset=utf8','mukemmel_tolgakocadag', 'Tlgkcdg1453**--');
 $GLOBALS['db']->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e){
  echo $e->getMessage();
}*/
?>
