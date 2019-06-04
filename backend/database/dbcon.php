<?php
try {
 $GLOBALS['db'] = new PDO('mysql:host=localhost;dbname=recide;charset=utf8','root', 'root');
}
catch (PDOException $e){
  echo $e->getMessage();
}
