<?php
// Contoh array dengan 6 elemen
$data = array('Data 1', 'Data 2', 'Data 3', 'Data 4', 'Data 5', 'Data 6');
?>

<table>
  <tr>
    <th>No</th>
    <th>Data</th>
  </tr>
  <?php
  // Menggunakan perulangan foreach untuk menampilkan setiap elemen dalam array
  $i = 1;
  foreach ($data as $d) {
    // Hanya menampilkan 3 elemen pertama dalam array
      echo "<tr><td>$i</td><td>$d</td></tr>";
  }
  ?>
</table>
