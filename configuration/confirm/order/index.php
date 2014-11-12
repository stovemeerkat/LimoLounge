<?php
  session_start();
  
  function checkOption($optn){
    echo $optn . ': ';
    if(!empty($_SESSION[$optn])){
      echo 'ja <br>';
    } else {
      echo 'nein <br>';
    }
  }
  
  checkOption('Zitrone');
?>
