<?php require_once 'operaciones.php';
$i=0;
?>

<table>
  <tr>
    <th>numeros</th>
    <th>ASCII</th>
    <th>unicode</th>
  </tr>
  <tr>
  <td><?php echo numeros($i)."</br>" ?></td> 
    <td><?php echo ascii($j)."</br>"?></td>
    <td><?php echo unicode($z)."</br>"?></td>
  </tr>
</table>
