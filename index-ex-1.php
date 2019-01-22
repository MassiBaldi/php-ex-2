<!-- Stampare una stringa verde se la
variabile password passata in GET è
uguale a “Boolean”, altrimenti stampare
una stringa rossa. -->

<?php
  $pwd = $_GET['password'];
?>
<?php if (!empty($pwd) && $pwd == 'Boolean') {?>
        <h1 style="color: green;">Utente valido</h1>
<?php }
      else { ?>
        <h1 style="color: red;">Utente non valido</h1>
<?php } ?>
