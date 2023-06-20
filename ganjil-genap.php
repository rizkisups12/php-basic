<!-- <?php
	for ($i = 1; $i <= 100; $i++) {
	  if ($i % 2 == 1) {
	    echo "Bilangan ke-$i adalah ganjil<br>";
	  } else {
	    echo "Bilangan ke-$i adalah genap<br>";
	  }
	}
?> -->

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i & 1) {
        echo "Bilangan ke-$i adalah ganjil<br>";
    } else {
        echo "Bilangan ke-$i adalah genap<br>";
    }
}
?>
