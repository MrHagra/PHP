<h1>Exo 2</h1>
<hr><p><h4>1/</h4></p>
<?php
$notes = array(
  'Roger' => 12,
  "Monica" => 16,
  "Najat" => 15,
);
print_r ($notes);
echo "<hr><h4>2/</h4>";
$notes['Anton'] = 10;
print_r ($notes);
echo "<hr><h4>3/</h4>";
$notes['Monica'] = null;
print_r ($notes);
echo "<hr><h4>4/</h4>";
echo "Le total du tableau est : ";
echo array_sum($notes);
echo "<hr><h4>5/</h4>";
ksort($notes);
print_r($notes);
echo "<hr><h4>6/</h4>";

arsort($notes);
print_r($notes);
 ?>
