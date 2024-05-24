<?php 
  //para chamar o css no arquivo php, url amigaveis, diretorios em geral. Precisa desse codigo

  $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?');

?>