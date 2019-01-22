<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
partite con questo schema, tenendo conto che il punteggio potrebbe non
essere disponibile
Olimpia Milano - Cantù | 55-60 -->

<?php
  $partite = [
    [
      'squadra_casa' => 'Olimpia Milano',
      'squadra_ospite' => 'Cantù',
      'punti_squadra_casa' => '55',
      'punti_squadra_ospite' => '60',
    ],
    [
      'squadra_casa' => 'Fiorentina',
      'squadra_ospite' => 'Empoli',
      'punti_squadra_casa' => '65',
      'punti_squadra_ospite' => '40',
    ],
    [
      'squadra_casa' => 'Pistoia',
      'squadra_ospite' => 'Prato',
      'punti_squadra_casa' => '60',
      'punti_squadra_ospite' => '75',
    ],
  ];
?>

<ul>
  <?php foreach ($partite as $partita) { ?>
    <li>
      <?php echo $partita['squadra_casa']; ?>
      -
      <?php echo $partita['squadra_ospite']; ?>
      |
      <?php if (
              !empty($partita['punti_squadra_casa'])
              && !empty($partita['punti_squadra_ospite'])
            ){ ?>
            <?php echo $partita['punti_squadra_casa']; ?>
            -
            <?php echo $partita['punti_squadra_ospite']; ?>
      <?php } else { ?>
              Partita non ancora disputata
            <?php } ?>
    </li>
    <br>
  <?php } ?>
</ul>
