<?php

  if  (isset($_POST['melhor_animacao'])) {

      setcookie('melhor_animacao', $_POST['melhor_animacao']);

  }

  if (!isset($_COOKIE['melhor_animacao'])) {

    include 'enquete.html';

  }else{

    echo "Você já votou! Não é possível votar novamente... A menos que você apague o cookie do seu navegador rsrs";

  }

?>
