<?php
$numeros = [];

for ($i = 1; $i <= 50; $i++) {
    $numeros[] = $i;
}
?>
    <?php
    foreach ($numeros as $i)
        if ($i % 3 == 0) {
            unset($i);
        } else {
            echo "<p>$i</p>";
        }
    ?>